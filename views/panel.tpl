<div>
{if $name eq ''}
    <a href="{$url}login/registerForm">Rejestracja</a>  
    <a href="{$url}login/loginForm">Zaloguj się</a>
{else}
    Witaj {$name}, <a href="{$url}login/logout">Wyloguj</a>
{/if}<div>