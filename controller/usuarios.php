
<?php
class Usuario{
	public $id_usuario;
    public $login_usuario;
    public $senha_usuario;
    public $desc_usuario;
    public $data_cadastro;
    public $data_modificacao;
    public $ativo;



    /*
     * @return mixed
     */
    public function getIdUsuario()
    {
        return $this->id_usuario;
    }

    /*
     * @param mixed $id_usuario
     *
     * @return self
     */
    public function setIdUsuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;

        return $this;
    }

    /*
     * @return mixed
     */
    public function getLoginUsuario()
    {
        return $this->login_usuario;
    }

    /*
     * @param mixed $login_usuario
     *
     * @return self
     */
    public function setLoginUsuario($login_usuario)
    {
        $this->login_usuario = $login_usuario;

        return $this;
    }

    /*
     * @return mixed
     */
    public function getSenhaUsuario()
    {
        return $this->senha_usuario;
    }

    /*
     * @param mixed $senha_usuario
     *
     * @return self
     */
    public function setSenhaUsuario($senha_usuario)
    {
        $this->senha_usuario = $senha_usuario;

        return $this;
    }

    /*
     * @return mixed
     */
    public function getDescUsuario()
    {
        return $this->desc_usuario;
    }

    /*
     * @param mixed $desc_usuario
     *
     * @return self
     */
    public function setDescUsuario($desc_usuario)
    {
        $this->desc_usuario = $desc_usuario;

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