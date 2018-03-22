<?php

/**
 * AdminCategory.class [ MODEL ADMIN ]
 * Responsável gerenciar as categorias no admin
 * @copyright (c) year, Hudson Soares - Elite Informatica
 */
class AdminCategory {

    private $Data;
    private $CatID;
    private $Error;
    private $Result;

    const Entity = 'ws_categories';

    public function ExeCreate(array $Data) {
        $this->Data = $Data;
        if (in_array('', $this->Data)):
            $this->Result = false;
            $this->Error = ['<b>Erro ao cadastrar: </b>Para cadastrar uma categoria, preencha todos os campos ', WS_ALERT];
        else:
            $this->setData();
            $this->setName();
        endif;
    }

    public function getError() {
        return $this->Error;
    }

    public function getResult() {
        return $this->Result;
    }

    //PRIVATE

    private function setData() {
        $this->Data = array_map('strip_tags', $this->Data);
        $this->Data = array_map('trim', $this->Data);
        $this->Data['category_name'] = Check::Name($this->Data['category_title']);
        $this->Data['category_date'] = Check::Data($this->Data['category_date']);
        $this->Data['category_parent'] = ($this->Data['category_parent'] == 'null' ? null : $this->Data['category_parent']);
    }

    private function setName() {
        $Where = (!empty($this->CatID) ? "WHERE category_id != {$this->CatID} AND " : '');
        $readName = new Read;
        $readName->ExeRead(self::Entity, "WHERE {$Where} category_title =:t", "t={$this->Data['category_title']}");
        if ($readName->getResult()):
            $this->Error = ["<b>Erro ao Cadstrar: </b>A categoria <b>{$this->Data['category_title']}</b> já existe!", WS_ERROR];
        else:
            $this->Create();
        // $this->Data['category_name'] = $this->Data['category_name'] . '-' . $readName->getRowCount();
        endif;
    }

    private function Create() {
        $Create = new Create;
        $Create->ExeCreate(self::Entity, $this->Data);
        if ($Create):
            $this->Result = $Create->getResult();
            $this->Error = ["<b>Cadastrado Efetuado:</b> A categoria <b>{$this->Data['category_title']}</b> foi cadastrada com sucesso!", WS_ACCEPT];
        endif;
    }

}
