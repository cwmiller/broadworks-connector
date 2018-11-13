<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDigitCollectionGetResponse13mp4
 *
 * Response to GroupDigitCollectionGetRequest13mp4.
 *
 * @see GroupDigitCollectionGetRequest13mp4
 */
class GroupDigitCollectionGetResponse13mp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useSetting
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupDigitCollectionSettingLevel
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupDigitCollectionSettingLevel|null
     */
    private $useSetting = null;

    /**
     * @ElementName accessCode
     * @Type string
     * @var string|null
     */
    private $accessCode = null;

    /**
     * @ElementName publicDigitMap
     * @Type string
     * @var string|null
     */
    private $publicDigitMap = null;

    /**
     * @ElementName privateDigitMap
     * @Type string
     * @var string|null
     */
    private $privateDigitMap = null;

    /**
     * Getter for useSetting
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupDigitCollectionSettingLevel
     */
    public function getUseSetting()
    {
        return $this->useSetting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useSetting;
    }

    /**
     * Setter for useSetting
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupDigitCollectionSettingLevel $useSetting
     * @return $this
     */
    public function setUseSetting(\CWM\BroadWorksConnector\Ocip\Models\GroupDigitCollectionSettingLevel $useSetting)
    {
        $this->useSetting = $useSetting;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseSetting()
    {
        $this->useSetting = null;
        return $this;
    }

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

