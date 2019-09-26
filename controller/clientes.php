
<?php
class Cliente{
	public $id_cliente;
	public $desc_cliente;
	public $email_cliente;
	public $data_cadastro;
	public $data_modificacao;
	public $ativo;

    
     /* @return mixed
     */
    public function getIdCliente()
    {
        return $this->id_cliente;
    }

    /*
     * @param mixed $id_cliente
     *
     * @return self
     */
    public function setIdCliente($id_cliente)
    {
        $this->id_cliente = $id_cliente;

        return $this;
    }

    /*
     * @return mixed
     */
    public function getDescCliente()
    {
        return $this->desc_cliente;
    }

    /*
     * @param mixed $desc_cliente
     *
     * @return self
     */
    public function setDescCliente($desc_cliente)
    {
        $this->desc_cliente = $desc_cliente;

        return $this;
    }

    /*
     * @return mixed
     */
    public function getEmailCliente()
    {
        return $this->email_cliente;
    }
    /*
     * @param mixed $email_cliente
     *
     * @return self
     */
    public function setEmailCliente($email_cliente)
    {
        $this->email_cliente = $email_cliente;

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