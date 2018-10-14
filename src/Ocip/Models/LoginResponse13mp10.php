<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * LoginResponse13mp10
 *
 * LoginRequest13mp10/Response13mp10 is 2nd stage of the 2 stage OCI login process.
 *
 * @see LoginRequest13mp10
 */
class LoginResponse13mp10 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName loginType
     * @var \CWM\BroadWorksConnector\Ocip\Models\LoginType|null
     */
    private $loginType = null;

    /**
     * @ElementName locale
     * @var string|null
     */
    private $locale = null;

    /**
     * @ElementName encoding
     * @var string|null
     */
    private $encoding = null;

    /**
     * Getter for loginType
     *
     * @ElementName loginType
     * @return \CWM\BroadWorksConnector\Ocip\Models\LoginType|null
     */
    public function getLoginType()
    {
        return $this->loginType;
    }

    /**
     * Setter for loginType
     *
     * @ElementName loginType
     * @param \CWM\BroadWorksConnector\Ocip\Models\LoginType|null $loginType
     * @return $this
     */
    public function setLoginType(\CWM\BroadWorksConnector\Ocip\Models\LoginType $loginType)
    {
        $this->loginType = $loginType;
        return $this;
    }

    /**
     * Getter for locale
     *
     * @ElementName locale
     * @return string|null
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Setter for locale
     *
     * @ElementName locale
     * @param string|null $locale
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
        return $this;
    }

    /**
     * Getter for encoding
     *
     * @ElementName encoding
     * @return string|null
     */
    public function getEncoding()
    {
        return $this->encoding;
    }

    /**
     * Setter for encoding
     *
     * @ElementName encoding
     * @param string|null $encoding
     * @return $this
     */
    public function setEncoding($encoding)
    {
        $this->encoding = $encoding;
        return $this;
    }


}

