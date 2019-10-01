
<?php
class TipoLancamento{
	public $id_tipo_lancamento;
    public $desc_tipo_lancamento;
    public $data_cadastro;
    public $data_modificacao;
    public $ativo;



    /*
     * @return mixed
     */
    public function getIdTipoLancamento()
    {
        return $this->id_tipo_lancamento;
    }

    /*
     * @param mixed $id_tipo_lancamento
     *
     * @return self
     */
    public function setIdTipoLancamento($id_tipo_lancamento)
    {
        $this->id_tipo_lancamento = $id_tipo_lancamento;

        return $this;
    }

    /*
     * @return mixed
     */
    public function getDescTipoLancamento()
    {
        return $this->desc_tipo_lancamento;
    }

    /*
     * @param mixed $desc_tipo_lancamento
     *
     * @return self
     */
    public function setDescTipoLancamento($desc_tipo_lancamento)
    {
        $this->desc_tipo_lancamento = $desc_tipo_lancamento;

        return $this;
    }

    /*
     * @return mixed
     */
    public function getDataCadastro()
    {
        return $this->data_cadastro;
    }

    /*
     * @param mixed $data_cadastro
     *
     * @return self
     */
    public function setDataCadastro($data_cadastro)
    {
        $this->data_cadastro = $data_cadastro;

        return $this;
    }

    /*
     * @return mixed
     */
    public function getDataModificacao()
    {
        return $this->data_modificacao;
    }

    /*
     * @param mixed $data_modificacao
     *
     * @return self
     */
    public function setDataModificacao($data_modificacao)
    {
        $this->data_modificacao = $data_modificacao;

        return $this;
    }

    /*
     * @return mixed
     */
    public function getAtivo()
    {
        return $this->ativo;
    }

    /*
     * @param mixed $ativo
     *
     * @return self
     */
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;

        return $this;
    }
}
?>