<?php

namespace Dappur\Middleware;

class Admin extends Middleware
{
    public function __invoke($request, $response, $next)
    {
        if ($this->auth->check() && $this->auth->hasAccess('dashboard.*')) {
            return $next($request, $response);
        }

        $this->flash->addMessage('danger', 'You do not have sufficient privileges to access this page!');
        return $response->withRedirect($this->router->pathFor('home'));
    }
}
