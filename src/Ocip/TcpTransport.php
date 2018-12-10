<?php

namespace CWM\BroadWorksConnector\Ocip;

class TcpTransport implements ITransport
{
    /** @var string */
    private $url;

    /** @var array */
    private $sslOptions;

    /** @var resource */
    private $socket;

    /**
     * @param string $url
     * @param array $sslOptions
     */
    public function __construct($url, array $sslOptions)
    {
        $this->url = $url;
        $this->sslOptions = $sslOptions;
    }

    /**
     * @param string $request
     * @return string
     * @throws \RuntimeException
     */
    public function send($request)
    {
        if ($this->socket === null) {
            $context = stream_context_create([
                'ssl' => $this->sslOptions
            ]);

            $this->socket = stream_socket_client($this->url, $errno, $errstr, 30, STREAM_CLIENT_CONNECT, $context);

            if ($errno !== 0) {
                throw new \RuntimeException('Unable to create socket: ' . $errstr);
            }

            if (!$this->socket) {
                throw new \RuntimeException('Unable to create socket.');
            }
        }

        $response = '';

        while (!feof($this->socket)) {
            $bytes = fgets($this->socket, 1024);
            $response .= $bytes;

            if (strpos($response, "</BroadsoftDocument>\n") !== false) {
                break;
            }
        }

        return trim($response);
    }
}