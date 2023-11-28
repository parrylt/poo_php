<?php 
class AlunoDTO
{
    private $nome="";
    private $email="";

    public function setNome ($pNome)
    {
        $this->nome = $pNome;
    }

    public function getNome ()
    {
        return $this->nome;
    }

    public function setEmail ($pEmail)
    {
        $this->email = $pEmail;
    }

    public function getEmail ()
    {
        return $this->email;
    }

    public function mostrarDados()
    {
        echo "O Nome do Aluno é: " . $this->nome. "<br>";
        echo "O E-mail do Aluno é: " . $this->email;
    }

}
?>