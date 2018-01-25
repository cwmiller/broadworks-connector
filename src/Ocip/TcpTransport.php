<?php

namespace CWM\BroadWorksConnector\Ocip;

class TcpTransport implements ITransport
{
    /** @var string */
    private $host;

    /** @var int */
    private $port;

    /** @var resource */
    private $socket;

    /**
     * @param string $host
     * @param int $port
     */
    public function __construct($host, $port = 2208)
    {
        $this->host = $host;
        $this->port = $port;
    }

    /**
     * @param string $request
     * @return string
     * @throws \RuntimeException
     */
    public function send($request)
    {
        if ($this->socket === null) {
            $address = gethostbyname($this->host);

            $this->socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

            if ($this->socket === false) {
                throw new \RuntimeException('Unable to create socket: ' . socket_strerror(socket_last_error($this->socket)));
            }

            if (!socket_connect($this->socket, $address, $this->port)) {
                throw new \RuntimeException('Unable to connect: ' . socket_strerror(socket_last_error($this->socket)));
            }
        }

        socket_write($this->socket, $request, strlen($request));

        $response = '';
        while ($bytes = socket_read($this->socket, 2048)) {
            $response .= $bytes;

            if (strpos($response, '</BroadsoftDocument>') !== false) {
                break;
            }
        }


        return $response;
    }

    /**
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @return int
     */
    public function getPort()
    {
        return $this->port;
    }
}