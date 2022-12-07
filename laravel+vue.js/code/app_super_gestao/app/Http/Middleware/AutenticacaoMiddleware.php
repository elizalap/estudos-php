<?php

namespace App\Http\Middleware;

use Closure;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $metodo_autenticacao)
    {
        //Verifica se o usuário possui acesso a rota
        echo $metodo_autenticacao . '<br>';
        if ($metodo_autenticacao == 'padrao') {
            echo 'Verificar o usuário e senha do banco de dados' . '<br>';
        }
        if (false) {
            return $next($request);
        } else {
            return Response('Acesso negado! Rota exige autenticação');
        }
    }
}
