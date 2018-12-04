<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNetworkClassOfServiceAddRequest
 *
 * Add a new Network Class of Service.
 *         The following elements are only used in AS data mode:
 *           callProcessingPolicyProfileName
 *           
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"610f84d3e188f0477c3ae1a82ee036da:10674","type":"sequence"}]
 */
class SystemNetworkClassOfServiceAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @Type string
     * @Group 610f84d3e188f0477c3ae1a82ee036da:10674
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName description
     * @Type string
     * @Optional
     * @Group 610f84d3e188f0477c3ae1a82ee036da:10674
     * @var string|null
     */
    private $description = null;

    /**
     * @ElementName communicationBarringProfile0
     * @Type \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile
     * @Optional
     * @Group 610f84d3e188f0477c3ae1a82ee036da:10674
     * @var \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null
     */
    private $communicationBarringProfile0 = null;

    /**
     * @ElementName communicationBarringProfile1
     * @Type \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile
     * @Optional
     * @Group 610f84d3e188f0477c3ae1a82ee036da:10674
     * @var \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null
     */
    private $communicationBarringProfile1 = null;

    /**
     * @ElementName communicationBarringProfile2
     * @Type \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile
     * @Optional
     * @Group 610f84d3e188f0477c3ae1a82ee036da:10674
     * @var \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null
     */
    private $communicationBarringProfile2 = null;

    /**
     * @ElementName communicationBarringProfile3
     * @Type \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile
     * @Optional
     * @Group 610f84d3e188f0477c3ae1a82ee036da:10674
     * @var \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null
     */
    private $communicationBarringProfile3 = null;

    /**
     * @ElementName communicationBarringProfile4
     * @Type \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile
     * @Optional
     * @Group 610f84d3e188f0477c3ae1a82ee036da:10674
     * @var \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null
     */
    private $communicationBarringProfile4 = null;

    /**
     * @ElementName communicationBarringProfile5
     * @Type \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile
     * @Optional
     * @Group 610f84d3e188f0477c3ae1a82ee036da:10674
     * @var \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null
     */
    private $communicationBarringProfile5 = null;

    /**
     * @ElementName communicationBarringProfile6
     * @Type \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile
     * @Optional
     * @Group 610f84d3e188f0477c3ae1a82ee036da:10674
     * @var \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null
     */
    private $communicationBarringProfile6 = null;

    /**
     * @ElementName communicationBarringProfile7
     * @Type \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile
     * @Optional
     * @Group 610f84d3e188f0477c3ae1a82ee036da:10674
     * @var \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null
     */
    private $communicationBarringProfile7 = null;

    /**
     * @ElementName communicationBarringProfile8
     * @Type \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile
     * @Optional
     * @Group 610f84d3e188f0477c3ae1a82ee036da:10674
     * @var \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null
     */
    private $communicationBarringProfile8 = null;

    /**
     * @ElementName communicationBarringProfile9
     * @Type \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile
     * @Optional
     * @Group 610f84d3e188f0477c3ae1a82ee036da:10674
     * @var \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null
     */
    private $communicationBarringProfile9 = null;

    /**
     * @ElementName networkTranslationIndex
     * @Type string
     * @Optional
     * @Group 610f84d3e188f0477c3ae1a82ee036da:10674
     * @var string|null
     */
    private $networkTranslationIndex = null;

    /**
     * @ElementName callProcessingPolicyProfileName
     * @Type string
     * @Optional
     * @Group 610f84d3e188f0477c3ae1a82ee036da:10674
     * @var string|null
     */
    private $callProcessingPolicyProfileName = null;

    /**
     * Getter for name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetName()
    {
        $this->name = null;
        return $this;
    }

    /**
     * Getter for description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDescription()
    {
        $this->description = null;
        return $this;
    }

    /**
     * Getter for communicationBarringProfile0
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile
     */
    public function getCommunicationBarringProfile0()
    {
        return $this->communicationBarringProfile0 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->communicationBarringProfile0;
    }

    /**
     * Setter for communicationBarringProfile0
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile0
     * @return $this
     */
    public function setCommunicationBarringProfile0(\CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile0)
    {
        $this->communicationBarringProfile0 = $communicationBarringProfile0;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCommunicationBarringProfile0()
    {
        $this->communicationBarringProfile0 = null;
        return $this;
    }

    /**
     * Getter for communicationBarringProfile1
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile
     */
    public function getCommunicationBarringProfile1()
    {
        return $this->communicationBarringProfile1 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->communicationBarringProfile1;
    }

    /**
     * Setter for communicationBarringProfile1
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile1
     * @return $this
     */
    public function setCommunicationBarringProfile1(\CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile1)
    {
        $this->communicationBarringProfile1 = $communicationBarringProfile1;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCommunicationBarringProfile1()
    {
        $this->communicationBarringProfile1 = null;
        return $this;
    }

    /**
     * Getter for communicationBarringProfile2
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile
     */
    public function getCommunicationBarringProfile2()
    {
        return $this->communicationBarringProfile2 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->communicationBarringProfile2;
    }

    /**
     * Setter for communicationBarringProfile2
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile2
     * @return $this
     */
    public function setCommunicationBarringProfile2(\CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile2)
    {
        $this->communicationBarringProfile2 = $communicationBarringProfile2;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCommunicationBarringProfile2()
    {
        $this->communicationBarringProfile2 = null;
        return $this;
    }

    /**
     * Getter for communicationBarringProfile3
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile
     */
    public function getCommunicationBarringProfile3()
    {
        return $this->communicationBarringProfile3 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->communicationBarringProfile3;
    }

    /**
     * Setter for communicationBarringProfile3
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile3
     * @return $this
     */
    public function setCommunicationBarringProfile3(\CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile3)
    {
        $this->communicationBarringProfile3 = $communicationBarringProfile3;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCommunicationBarringProfile3()
    {
        $this->communicationBarringProfile3 = null;
        return $this;
    }

    /**
     * Getter for communicationBarringProfile4
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile
     */
    public function getCommunicationBarringProfile4()
    {
        return $this->communicationBarringProfile4 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->communicationBarringProfile4;
    }

    /**
     * Setter for communicationBarringProfile4
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile4
     * @return $this
     */
    public function setCommunicationBarringProfile4(\CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile4)
    {
        $this->communicationBarringProfile4 = $communicationBarringProfile4;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCommunicationBarringProfile4()
    {
        $this->communicationBarringProfile4 = null;
        return $this;
    }

    /**
     * Getter for communicationBarringProfile5
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile
     */
    public function getCommunicationBarringProfile5()
    {
        return $this->communicationBarringProfile5 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->communicationBarringProfile5;
    }

    /**
     * Setter for communicationBarringProfile5
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile5
     * @return $this
     */
    public function setCommunicationBarringProfile5(\CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile5)
    {
        $this->communicationBarringProfile5 = $communicationBarringProfile5;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCommunicationBarringProfile5()
    {
        $this->communicationBarringProfile5 = null;
        return $this;
    }

    /**
     * Getter for communicationBarringProfile6
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile
     */
    public function getCommunicationBarringProfile6()
    {
        return $this->communicationBarringProfile6 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->communicationBarringProfile6;
    }

    /**
     * Setter for communicationBarringProfile6
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile6
     * @return $this
     */
    public function setCommunicationBarringProfile6(\CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile6)
    {
        $this->communicationBarringProfile6 = $communicationBarringProfile6;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCommunicationBarringProfile6()
    {
        $this->communicationBarringProfile6 = null;
        return $this;
    }

    /**
     * Getter for communicationBarringProfile7
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile
     */
    public function getCommunicationBarringProfile7()
    {
        return $this->communicationBarringProfile7 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->communicationBarringProfile7;
    }

    /**
     * Setter for communicationBarringProfile7
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile7
     * @return $this
     */
    public function setCommunicationBarringProfile7(\CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile7)
    {
        $this->communicationBarringProfile7 = $communicationBarringProfile7;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCommunicationBarringProfile7()
    {
        $this->communicationBarringProfile7 = null;
        return $this;
    }

    /**
     * Getter for communicationBarringProfile8
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile
     */
    public function getCommunicationBarringProfile8()
    {
        return $this->communicationBarringProfile8 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->communicationBarringProfile8;
    }

    /**
     * Setter for communicationBarringProfile8
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile8
     * @return $this
     */
    public function setCommunicationBarringProfile8(\CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile8)
    {
        $this->communicationBarringProfile8 = $communicationBarringProfile8;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCommunicationBarringProfile8()
    {
        $this->communicationBarringProfile8 = null;
        return $this;
    }

    /**
     * Getter for communicationBarringProfile9
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile
     */
    public function getCommunicationBarringProfile9()
    {
        return $this->communicationBarringProfile9 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->communicationBarringProfile9;
    }

    /**
     * Setter for communicationBarringProfile9
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile9
     * @return $this
     */
    public function setCommunicationBarringProfile9(\CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile9)
    {
        $this->communicationBarringProfile9 = $communicationBarringProfile9;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCommunicationBarringProfile9()
    {
        $this->communicationBarringProfile9 = null;
        return $this;
    }

    /**
     * Getter for networkTranslationIndex
     *
     * @return string
     */
    public function getNetworkTranslationIndex()
    {
        return $this->networkTranslationIndex instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkTranslationIndex;
    }

    /**
     * Setter for networkTranslationIndex
     *
     * @param string $networkTranslationIndex
     * @return $this
     */
    public function setNetworkTranslationIndex($networkTranslationIndex)
    {
        $this->networkTranslationIndex = $networkTranslationIndex;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetworkTranslationIndex()
    {
        $this->networkTranslationIndex = null;
        return $this;
    }

    /**
     * Getter for callProcessingPolicyProfileName
     *
     * @return string
     */
    public function getCallProcessingPolicyProfileName()
    {
        return $this->callProcessingPolicyProfileName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callProcessingPolicyProfileName;
    }

    /**
     * Setter for callProcessingPolicyProfileName
     *
     * @param string $callProcessingPolicyProfileName
     * @return $this
     */
    public function setCallProcessingPolicyProfileName($callProcessingPolicyProfileName)
    {
        $this->callProcessingPolicyProfileName = $callProcessingPolicyProfileName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallProcessingPolicyProfileName()
    {
        $this->callProcessingPolicyProfileName = null;
        return $this;
    }


}

