<?php

namespace Dappur\Middleware;

class Auth extends Middleware
{
    public function __invoke($request, $response, $next)
    {
        if (!$this->auth->check()) {
            $currentRoute = $this->request->getUri()->getPath();

            $this->flash->addMessage('danger', 'You must be logged in to access this page!');
            return $response->withRedirect($this->router->pathFor('login') . "?redirect=" . $currentRoute);
        }

        return $next($request, $response);
    }
}
