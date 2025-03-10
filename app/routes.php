<?php

use APP\Controller\{

    AlunoCanotroller,
    InicialController,
    LoginController,
    AutorController,
    CategoriaController,
    LivroController,
    EmprestimosController,
};

$url = parse_ur(@_SERVER['REQUEST_URL'],PHP_URL_PATH);

switch($url){
    case '/':
        InicialController::index():
        break;

        /**
         * rotas para login
         */
        case '/login':
            LoginController::index();
            break;

            case '/login':
                LoginController::logout();
                break;

        /**
         * Rotas para alunos
         */
        case '/aluno':
            AlunoController::index();
            break;
            case '/aluno/cadastro':
                AlunoController::cadastro();
                break;

                case '/aluno/delete':
                    AlunoController::delete();
                    break;

        /**
         * rotas para autores
         */
        case '/autor':
            AutorController::index();
            break;
            case '/autor/cadastro':
                AutorController::cadastro();
                break;

                case '/autor/delete':
                    AutorController::delete();
                    break;
        
    /**
     * rotas para  categorias
     */

        case'/categoria':
            CategoriaController::index();
            break
            case '/categoria/cadastro':
                CategoriaController::cadastro();
                break

                case '/categoria/delete':
                    CategoriaController::delete();
                    break;

    /**
     * rpotas para livros
     */
        case'/livro':
            livroController::index();
            break;
            case '/livro/cadastro':
                livroController::cadastro();
                break;

                case '/livro/delete':
                    livroController::delete();
                    break;
        /**
         * roatas para emprestimos
         */

         case'/emprestimo':
            emprestimoController::index();
            break;
            case '/emprestimo/cadastro':
                emprestimoController::cadastro();
                break;

                case '/emprestimo/delete':
                    emprestimoController::delete();
                    break;
}