<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderDigitCollectionGetResponse13mp4
 *
 * Response to ServiceProviderDigitCollectionGetRequest13mp4.
 *
 * @see ServiceProviderDigitCollectionGetRequest13mp4
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:3827","type":"sequence"}]
 */
class ServiceProviderDigitCollectionGetResponse13mp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName accessCode
     * @Type string
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:3827
     * @MinLength 1
     * @MaxLength 1
     * @var string|null
     */
    protected $accessCode = null;

    /**
     * @ElementName publicDigitMap
     * @Type string
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:3827
     * @MinLength 1
     * @MaxLength 2048
     * @var string|null
     */
    protected $publicDigitMap = null;

    /**
     * @ElementName privateDigitMap
     * @Type string
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:3827
     * @MinLength 1
     * @MaxLength 2048
     * @var string|null
     */
    protected $privateDigitMap = null;

    /**
     * Getter for accessCode
     *
     * @return string
     */
    public function getAccessCode()
    {
        return $this->accessCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessCode;
    }

    /**
     * Setter for accessCode
     *
     * @param string $accessCode
     * @return $this
     */
    public function setAccessCode($accessCode)
    {
        $this->accessCode = $accessCode;
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
     * @return string
     */
    public function getPrivateDigitMap()
    {
        return $this->privateDigitMap instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->privateDigitMap;
    }

    /**
     * Setter for privateDigitMap
     *
     * @param string $privateDigitMap
     * @return $this
     */
    public function setPrivateDigitMap($privateDigitMap)
    {
        $this->privateDigitMap = $privateDigitMap;
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

