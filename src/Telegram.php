<?php

namespace Atiksoftware\Telegram;

class Telegram
{
    /**
     * @var string
     */
    protected $token;
    /**
     * @var string
     */
    protected $baseUrl = 'https://api.telegram.org/bot';

    /**
     * Instantiates a new Telegram super-class object.
     *
     * @param  string|null  $token  The Telegram Bot Token.
     */
    public function __construct(string $token = null)
    {
        $this->token = $token;
    }

    /**
     * Set the Telegram Bot Token.
     *
     * @param  string  $token
     * @return void
     */
    public function setToken(string $token)
    {
        $this->token = $token;
    }
}
