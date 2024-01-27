<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * LoginResponse13mp10
 *
 * LoginRequest13mp10/Response13mp10 is 2nd stage of the 2 stage OCI login process.
 *
 * @see LoginRequest13mp10
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:16868","type":"sequence"}]
 */
class LoginResponse13mp10 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName loginType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LoginType
     * @Group d8f04177e438f303b41c211e518706bf:16868
     * @var \CWM\BroadWorksConnector\Ocip\Models\LoginType|null
     */
    protected $loginType = null;

    /**
     * @ElementName locale
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:16868
     * @MaxLength 5
     * @var string|null
     */
    protected $locale = null;

    /**
     * @ElementName encoding
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:16868
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $encoding = null;

    /**
     * Getter for loginType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\LoginType
     */
    public function getLoginType()
    {
        return $this->loginType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->loginType;
    }

    /**
     * Setter for loginType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\LoginType $loginType
     * @return $this
     */
    public function setLoginType(\CWM\BroadWorksConnector\Ocip\Models\LoginType $loginType)
    {
        $this->loginType = $loginType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLoginType()
    {
        $this->loginType = null;
        return $this;
    }

    /**
     * Getter for locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->locale instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->locale;
    }

    /**
     * Setter for locale
     *
     * @param string $locale
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLocale()
    {
        $this->locale = null;
        return $this;
    }

    /**
     * Getter for encoding
     *
     * @return string
     */
    public function getEncoding()
    {
        return $this->encoding instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->encoding;
    }

    /**
     * Setter for encoding
     *
     * @param string $encoding
     * @return $this
     */
    public function setEncoding($encoding)
    {
        $this->encoding = $encoding;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEncoding()
    {
        $this->encoding = null;
        return $this;
    }
}

