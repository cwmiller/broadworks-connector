<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemFeatureAccessCodeModifyListRequest21
 *
 * Modify default Feature Access Codes.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 *         In release 20 the "Call Recording" FAC name is changed to
 *         "Call Recording - Start".
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemFeatureAccessCodeModifyListRequest21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName featureAccessCode
     * @var \CWM\BroadWorksConnector\Ocip\Models\FeatureAccessCodeModifyEntry[]
     */
    private $featureAccessCode = array(
        
    );

    /**
     * Getter for featureAccessCode
     *
     * @ElementName featureAccessCode
     * @return \CWM\BroadWorksConnector\Ocip\Models\FeatureAccessCodeModifyEntry[]
     */
    public function getFeatureAccessCode()
    {
        return $this->featureAccessCode;
    }

    /**
     * Setter for featureAccessCode
     *
     * @ElementName featureAccessCode
     * @param \CWM\BroadWorksConnector\Ocip\Models\FeatureAccessCodeModifyEntry[] $featureAccessCode
     * @return $this
     */
    public function setFeatureAccessCode(array $featureAccessCode)
    {
        $this->featureAccessCode = $featureAccessCode;
        return $this;
    }

    /**
     * Adder for featureAccessCode
     *
     * @ElementName featureAccessCode
     * @param \CWM\BroadWorksConnector\Ocip\Models\FeatureAccessCodeModifyEntry $featureAccessCode
     * @return $this
     */
    public function addFeatureAccessCode($featureAccessCode)
    {
        $this->featureAccessCode []= $featureAccessCode;
        return $this;
    }


}

