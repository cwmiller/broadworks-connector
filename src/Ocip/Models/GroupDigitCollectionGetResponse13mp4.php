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
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupDigitCollectionSettingLevel|null
     */
    private $useSetting = null;

    /**
     * @ElementName accessCode
     * @var string|null
     */
    private $accessCode = null;

    /**
     * @ElementName publicDigitMap
     * @var string|null
     */
    private $publicDigitMap = null;

    /**
     * @ElementName privateDigitMap
     * @var string|null
     */
    private $privateDigitMap = null;

    /**
     * Getter for useSetting
     *
     * @ElementName useSetting
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupDigitCollectionSettingLevel|null
     */
    public function getUseSetting()
    {
        return $this->useSetting;
    }

    /**
     * Setter for useSetting
     *
     * @ElementName useSetting
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupDigitCollectionSettingLevel|null $useSetting
     * @return $this
     */
    public function setUseSetting(\CWM\BroadWorksConnector\Ocip\Models\GroupDigitCollectionSettingLevel $useSetting)
    {
        $this->useSetting = $useSetting;
        return $this;
    }

    /**
     * Getter for accessCode
     *
     * @ElementName accessCode
     * @return string|null
     */
    public function getAccessCode()
    {
        return $this->accessCode;
    }

    /**
     * Setter for accessCode
     *
     * @ElementName accessCode
     * @param string|null $accessCode
     * @return $this
     */
    public function setAccessCode($accessCode)
    {
        $this->accessCode = $accessCode;
        return $this;
    }

    /**
     * Getter for publicDigitMap
     *
     * @ElementName publicDigitMap
     * @return string|null
     */
    public function getPublicDigitMap()
    {
        return $this->publicDigitMap;
    }

    /**
     * Setter for publicDigitMap
     *
     * @ElementName publicDigitMap
     * @param string|null $publicDigitMap
     * @return $this
     */
    public function setPublicDigitMap($publicDigitMap)
    {
        $this->publicDigitMap = $publicDigitMap;
        return $this;
    }

    /**
     * Getter for privateDigitMap
     *
     * @ElementName privateDigitMap
     * @return string|null
     */
    public function getPrivateDigitMap()
    {
        return $this->privateDigitMap;
    }

    /**
     * Setter for privateDigitMap
     *
     * @ElementName privateDigitMap
     * @param string|null $privateDigitMap
     * @return $this
     */
    public function setPrivateDigitMap($privateDigitMap)
    {
        $this->privateDigitMap = $privateDigitMap;
        return $this;
    }


}

