<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserFeatureAccessCodeModifyEntry
 *
 * Feature Access Code Entry to be used in all user modify command.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:4548","type":"sequence"}]
 */
class UserFeatureAccessCodeModifyEntry
{

    /**
     * @ElementName featureAccessCodeName
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:4548
     * @MinLength 1
     * @var string|null
     */
    private $featureAccessCodeName = null;

    /**
     * @ElementName enableFAC
     * @Type bool
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:4548
     * @var bool|null
     */
    private $enableFAC = null;

    /**
     * Getter for featureAccessCodeName
     *
     * @return string
     */
    public function getFeatureAccessCodeName()
    {
        return $this->featureAccessCodeName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->featureAccessCodeName;
    }

    /**
     * Setter for featureAccessCodeName
     *
     * @param string $featureAccessCodeName
     * @return $this
     */
    public function setFeatureAccessCodeName($featureAccessCodeName)
    {
        $this->featureAccessCodeName = $featureAccessCodeName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFeatureAccessCodeName()
    {
        $this->featureAccessCodeName = null;
        return $this;
    }

    /**
     * Getter for enableFAC
     *
     * @return bool
     */
    public function getEnableFAC()
    {
        return $this->enableFAC instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableFAC;
    }

    /**
     * Setter for enableFAC
     *
     * @param bool $enableFAC
     * @return $this
     */
    public function setEnableFAC($enableFAC)
    {
        $this->enableFAC = $enableFAC;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableFAC()
    {
        $this->enableFAC = null;
        return $this;
    }


}

