<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDigitCollectionModifyRequest
 *
 * Modifies the system's digit collection attributes.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:8194","type":"sequence"}]
 */
class SystemDigitCollectionModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName accessCode
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:8194
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $accessCode = null;

    /**
     * @ElementName publicDigitMap
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:8194
     * @var string|null
     */
    private $publicDigitMap = null;

    /**
     * @ElementName privateDigitMap
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:8194
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $privateDigitMap = null;

    /**
     * Getter for accessCode
     *
     * @return string|null
     */
    public function getAccessCode()
    {
        return $this->accessCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessCode;
    }

    /**
     * Setter for accessCode
     *
     * @param string|null $accessCode
     * @return $this
     */
    public function setAccessCode($accessCode = null)
    {
        if ($accessCode === null) {
            $this->accessCode = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->accessCode = $accessCode;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccessCode()
    {
        $this->accessCode = null;
        return $this;
    }

    /**
     * Getter for publicDigitMap
     *
     * @return string
     */
    public function getPublicDigitMap()
    {
        return $this->publicDigitMap instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->publicDigitMap;
    }

    /**
     * Setter for publicDigitMap
     *
     * @param string $publicDigitMap
     * @return $this
     */
    public function setPublicDigitMap($publicDigitMap)
    {
        $this->publicDigitMap = $publicDigitMap;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPublicDigitMap()
    {
        $this->publicDigitMap = null;
        return $this;
    }

    /**
     * Getter for privateDigitMap
     *
     * @return string|null
     */
    public function getPrivateDigitMap()
    {
        return $this->privateDigitMap instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->privateDigitMap;
    }

    /**
     * Setter for privateDigitMap
     *
     * @param string|null $privateDigitMap
     * @return $this
     */
    public function setPrivateDigitMap($privateDigitMap = null)
    {
        if ($privateDigitMap === null) {
            $this->privateDigitMap = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->privateDigitMap = $privateDigitMap;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPrivateDigitMap()
    {
        $this->privateDigitMap = null;
        return $this;
    }


}

