<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNetworkClassOfServiceModifyRequest
 *
 * Modify an existing Network Class of Service.
 *         The following elements are only used in AS data mode:
 *           callProcessingPolicyProfileName
 *           
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemNetworkClassOfServiceModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName newName
     * @var string|null
     */
    private $newName = null;

    /**
     * @ElementName description
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $description = null;

    /**
     * @ElementName communicationBarringProfile0
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $communicationBarringProfile0 = null;

    /**
     * @ElementName communicationBarringProfile1
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $communicationBarringProfile1 = null;

    /**
     * @ElementName communicationBarringProfile2
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $communicationBarringProfile2 = null;

    /**
     * @ElementName communicationBarringProfile3
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $communicationBarringProfile3 = null;

    /**
     * @ElementName communicationBarringProfile4
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $communicationBarringProfile4 = null;

    /**
     * @ElementName communicationBarringProfile5
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $communicationBarringProfile5 = null;

    /**
     * @ElementName communicationBarringProfile6
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $communicationBarringProfile6 = null;

    /**
     * @ElementName communicationBarringProfile7
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $communicationBarringProfile7 = null;

    /**
     * @ElementName communicationBarringProfile8
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $communicationBarringProfile8 = null;

    /**
     * @ElementName communicationBarringProfile9
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $communicationBarringProfile9 = null;

    /**
     * @ElementName networkTranslationIndex
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $networkTranslationIndex = null;

    /**
     * @ElementName callProcessingPolicyProfileName
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $callProcessingPolicyProfileName = null;

    /**
     * Getter for name
     *
     * @ElementName name
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter for name
     *
     * @ElementName name
     * @param string|null $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Getter for newName
     *
     * @ElementName newName
     * @return string|null
     */
    public function getNewName()
    {
        return $this->newName;
    }

    /**
     * Setter for newName
     *
     * @ElementName newName
     * @param string|null $newName
     * @return $this
     */
    public function setNewName($newName)
    {
        $this->newName = $newName;
        return $this;
    }

    /**
     * Getter for description
     *
     * @ElementName description
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Setter for description
     *
     * @ElementName description
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Getter for communicationBarringProfile0
     *
     * @ElementName communicationBarringProfile0
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getCommunicationBarringProfile0()
    {
        return $this->communicationBarringProfile0;
    }

    /**
     * Setter for communicationBarringProfile0
     *
     * @ElementName communicationBarringProfile0
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null|\CWM\BroadWorksConnector\Ocip\Nil $communicationBarringProfile0
     * @return $this
     */
    public function setCommunicationBarringProfile0($communicationBarringProfile0)
    {
        $this->communicationBarringProfile0 = $communicationBarringProfile0;
        return $this;
    }

    /**
     * Getter for communicationBarringProfile1
     *
     * @ElementName communicationBarringProfile1
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getCommunicationBarringProfile1()
    {
        return $this->communicationBarringProfile1;
    }

    /**
     * Setter for communicationBarringProfile1
     *
     * @ElementName communicationBarringProfile1
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null|\CWM\BroadWorksConnector\Ocip\Nil $communicationBarringProfile1
     * @return $this
     */
    public function setCommunicationBarringProfile1($communicationBarringProfile1)
    {
        $this->communicationBarringProfile1 = $communicationBarringProfile1;
        return $this;
    }

    /**
     * Getter for communicationBarringProfile2
     *
     * @ElementName communicationBarringProfile2
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getCommunicationBarringProfile2()
    {
        return $this->communicationBarringProfile2;
    }

    /**
     * Setter for communicationBarringProfile2
     *
     * @ElementName communicationBarringProfile2
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null|\CWM\BroadWorksConnector\Ocip\Nil $communicationBarringProfile2
     * @return $this
     */
    public function setCommunicationBarringProfile2($communicationBarringProfile2)
    {
        $this->communicationBarringProfile2 = $communicationBarringProfile2;
        return $this;
    }

    /**
     * Getter for communicationBarringProfile3
     *
     * @ElementName communicationBarringProfile3
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getCommunicationBarringProfile3()
    {
        return $this->communicationBarringProfile3;
    }

    /**
     * Setter for communicationBarringProfile3
     *
     * @ElementName communicationBarringProfile3
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null|\CWM\BroadWorksConnector\Ocip\Nil $communicationBarringProfile3
     * @return $this
     */
    public function setCommunicationBarringProfile3($communicationBarringProfile3)
    {
        $this->communicationBarringProfile3 = $communicationBarringProfile3;
        return $this;
    }

    /**
     * Getter for communicationBarringProfile4
     *
     * @ElementName communicationBarringProfile4
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getCommunicationBarringProfile4()
    {
        return $this->communicationBarringProfile4;
    }

    /**
     * Setter for communicationBarringProfile4
     *
     * @ElementName communicationBarringProfile4
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null|\CWM\BroadWorksConnector\Ocip\Nil $communicationBarringProfile4
     * @return $this
     */
    public function setCommunicationBarringProfile4($communicationBarringProfile4)
    {
        $this->communicationBarringProfile4 = $communicationBarringProfile4;
        return $this;
    }

    /**
     * Getter for communicationBarringProfile5
     *
     * @ElementName communicationBarringProfile5
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getCommunicationBarringProfile5()
    {
        return $this->communicationBarringProfile5;
    }

    /**
     * Setter for communicationBarringProfile5
     *
     * @ElementName communicationBarringProfile5
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null|\CWM\BroadWorksConnector\Ocip\Nil $communicationBarringProfile5
     * @return $this
     */
    public function setCommunicationBarringProfile5($communicationBarringProfile5)
    {
        $this->communicationBarringProfile5 = $communicationBarringProfile5;
        return $this;
    }

    /**
     * Getter for communicationBarringProfile6
     *
     * @ElementName communicationBarringProfile6
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getCommunicationBarringProfile6()
    {
        return $this->communicationBarringProfile6;
    }

    /**
     * Setter for communicationBarringProfile6
     *
     * @ElementName communicationBarringProfile6
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null|\CWM\BroadWorksConnector\Ocip\Nil $communicationBarringProfile6
     * @return $this
     */
    public function setCommunicationBarringProfile6($communicationBarringProfile6)
    {
        $this->communicationBarringProfile6 = $communicationBarringProfile6;
        return $this;
    }

    /**
     * Getter for communicationBarringProfile7
     *
     * @ElementName communicationBarringProfile7
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getCommunicationBarringProfile7()
    {
        return $this->communicationBarringProfile7;
    }

    /**
     * Setter for communicationBarringProfile7
     *
     * @ElementName communicationBarringProfile7
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null|\CWM\BroadWorksConnector\Ocip\Nil $communicationBarringProfile7
     * @return $this
     */
    public function setCommunicationBarringProfile7($communicationBarringProfile7)
    {
        $this->communicationBarringProfile7 = $communicationBarringProfile7;
        return $this;
    }

    /**
     * Getter for communicationBarringProfile8
     *
     * @ElementName communicationBarringProfile8
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getCommunicationBarringProfile8()
    {
        return $this->communicationBarringProfile8;
    }

    /**
     * Setter for communicationBarringProfile8
     *
     * @ElementName communicationBarringProfile8
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null|\CWM\BroadWorksConnector\Ocip\Nil $communicationBarringProfile8
     * @return $this
     */
    public function setCommunicationBarringProfile8($communicationBarringProfile8)
    {
        $this->communicationBarringProfile8 = $communicationBarringProfile8;
        return $this;
    }

    /**
     * Getter for communicationBarringProfile9
     *
     * @ElementName communicationBarringProfile9
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getCommunicationBarringProfile9()
    {
        return $this->communicationBarringProfile9;
    }

    /**
     * Setter for communicationBarringProfile9
     *
     * @ElementName communicationBarringProfile9
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null|\CWM\BroadWorksConnector\Ocip\Nil $communicationBarringProfile9
     * @return $this
     */
    public function setCommunicationBarringProfile9($communicationBarringProfile9)
    {
        $this->communicationBarringProfile9 = $communicationBarringProfile9;
        return $this;
    }

    /**
     * Getter for networkTranslationIndex
     *
     * @ElementName networkTranslationIndex
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getNetworkTranslationIndex()
    {
        return $this->networkTranslationIndex;
    }

    /**
     * Setter for networkTranslationIndex
     *
     * @ElementName networkTranslationIndex
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $networkTranslationIndex
     * @return $this
     */
    public function setNetworkTranslationIndex($networkTranslationIndex)
    {
        $this->networkTranslationIndex = $networkTranslationIndex;
        return $this;
    }

    /**
     * Getter for callProcessingPolicyProfileName
     *
     * @ElementName callProcessingPolicyProfileName
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getCallProcessingPolicyProfileName()
    {
        return $this->callProcessingPolicyProfileName;
    }

    /**
     * Setter for callProcessingPolicyProfileName
     *
     * @ElementName callProcessingPolicyProfileName
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $callProcessingPolicyProfileName
     * @return $this
     */
    public function setCallProcessingPolicyProfileName($callProcessingPolicyProfileName)
    {
        $this->callProcessingPolicyProfileName = $callProcessingPolicyProfileName;
        return $this;
    }


}

