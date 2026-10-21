<?php
class Usuarios extends Controller{
    public function cadastrar()
    {
        $formulario = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if (isset($formulario)):

            $dados = [
                'nome' => trim($formulario['nome'] ?? ''),
                'email' => trim($formulario['email'] ?? ''),
                'senha' => trim($formulario['senha'] ?? ''),
                'confirma_senha' => trim($formulario['confirma_senha'] ?? ''),
            ];

            var_dump($formulario);

            if (empty($formulario['nome'])):
                $dados['nome_erro'] = 'Preencha o campo nome';
            endif;

            if (empty($formulario['email'])):
                $dados['email_erro'] = 'Preencha o campo e-mail';
            endif;

            if (empty($formulario['senha'])):
                $dados['senha_erro'] = 'Preencha o campo senha';
            endif;

            if (empty($formulario['confirma_senha'])):
                $dados['confirma_senha_erro'] = 'Preencha o campo confirma senha';
            endif;

        else:
            $dados['senha'] = password_hash($formulario['senha'],
            PASSWORD_DEFAULT);
            if($this->usuarioModel->armazenar($dados)):
                Sessao::mensagem('usuario', 'Cadastro realizado com sucesso');
                URL::redirecionar('usuario/login');
              else:
            die('Erro ao armazenar o usuário no banco de dados');
            endif;

        endif;
    else:
            $dados=[
                'nome'=>'',
                'email'=>'',
                'senha'=>'',
                'confirma_senha'=>'',
                'nome_erro'=>'',
                'email_erro'=>'',
                'senha_erro'=>'',
                'confirma_senha_erro'=>'',
        ];
        endif;

        $this->view('usuarios/cadastrar', $dados);
    } // fim da função cadastrar

     public function login(){
        $formulario = filter_input_array(INPUT_POST, 
        FILTER_SANITIZE_CHARS);
        if(isset($formulario)):
            $dados = [
                'email'=>trim($formulario['email']),
                'senha'=>trim($formulario['senha']),
            ];
            if(in_array("", $formulario)):
                if(empty($formulario['email'])):
                    $dados['email_erro'] = 'Preencha o campo Email';
                endif;
                if(empty($formulario['senha'])):
                    $dados['senha_erro'] = 'Preencha o campo Senha';
                endif;
            else:
                if(Checa::checarEmail($formulario['email'])):
                    $dados[ email_erro] = "O e-email informado é 
                    inválido";
                else:
                    $usuario = $this->usuarioModel->checharLogin($formulario
                    ['email'], $formulario['senha']);
                    if($usuario):
                        $this->criarSessaoUsuario($usuario);
                    else:
                        Sessao::mensagem('usuario', 'Usuário ou senha 
                        invalidos','alert alert-danger');
                    endif;
                endif;
            endif;
        else:
            $dados = [
                'email'=>'',
                'senha'=>'',
                'email_erro'=>'',
                'senha_erro'=>'',
            ];
        endif;
        
        $this->view('usuarios/login');
    }//fim da função login

    public function criarSessaoUsuario($usuario){
        $_SESSION['usuario_id'] = $usuario->id;
        $_SESSION['usuario_nome'] = $usuario->nome;
        $_SESSION['usuario_email'] = $usuario->email;

        Url::redirecionar('posts');
    }//fim da função criarSessaoUsuario

    public function sair(){
        unset($_SESSION['usuario_id']);
        unset($_SESSION['usuario_nome']);
        unset($_SESSION['usuario_email']);
        session_destroy();
        Url::redirecionar('usuarios/login');
    }//fim da função sair
}//fim da classe Usuarios