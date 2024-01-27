<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemFeatureAccessCodeModifyListRequest
 *
 * Modify default Feature Access Codes.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         Replaced by: SystemFeatureAccessCodeModifyListRequest21 in AS data mode
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see SystemFeatureAccessCodeModifyListRequest21
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:10386","type":"sequence"}]
 */
class SystemFeatureAccessCodeModifyListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName featureAccessCode
     * @Type \CWM\BroadWorksConnector\Ocip\Models\FeatureAccessCodeEntry
     * @Array
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:10386
     * @var \CWM\BroadWorksConnector\Ocip\Models\FeatureAccessCodeEntry[]
     */
    protected $featureAccessCode = [
        
    ];

    /**
     * Getter for featureAccessCode
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\FeatureAccessCodeEntry[]
     */
    public function getFeatureAccessCode()
    {
        return $this->featureAccessCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->featureAccessCode;
    }

    /**
     * Setter for featureAccessCode
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\FeatureAccessCodeEntry[] $featureAccessCode
     * @return $this
     */
    public function setFeatureAccessCode(array $featureAccessCode)
    {
        $this->featureAccessCode = $featureAccessCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFeatureAccessCode()
    {
        $this->featureAccessCode = null;
        return $this;
    }

    /**
     * Adder for featureAccessCode
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\FeatureAccessCodeEntry $featureAccessCode
     * @return $this
     */
    public function addFeatureAccessCode($featureAccessCode)
    {
        $this->featureAccessCode[] = $featureAccessCode;
        return $this;
    }
}

