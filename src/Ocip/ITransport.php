<?php

namespace CWM\BroadWorksConnector\Ocip;

interface ITransport
{
    /**
     * @param string $request
     * @return string
     */
    public function send($request);
}