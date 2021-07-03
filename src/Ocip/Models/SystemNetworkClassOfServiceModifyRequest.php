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
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:12571","type":"sequence"}]
 */
class SystemNetworkClassOfServiceModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:12571
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName newName
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:12571
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $newName = null;

    /**
     * @ElementName description
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:12571
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $description = null;

    /**
     * @ElementName communicationBarringProfile0
     * @Type \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:12571
     * @var \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $communicationBarringProfile0 = null;

    /**
     * @ElementName communicationBarringProfile1
     * @Type \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:12571
     * @var \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $communicationBarringProfile1 = null;

    /**
     * @ElementName communicationBarringProfile2
     * @Type \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:12571
     * @var \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $communicationBarringProfile2 = null;

    /**
     * @ElementName communicationBarringProfile3
     * @Type \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:12571
     * @var \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $communicationBarringProfile3 = null;

    /**
     * @ElementName communicationBarringProfile4
     * @Type \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:12571
     * @var \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $communicationBarringProfile4 = null;

    /**
     * @ElementName communicationBarringProfile5
     * @Type \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:12571
     * @var \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $communicationBarringProfile5 = null;

    /**
     * @ElementName communicationBarringProfile6
     * @Type \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:12571
     * @var \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $communicationBarringProfile6 = null;

    /**
     * @ElementName communicationBarringProfile7
     * @Type \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:12571
     * @var \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $communicationBarringProfile7 = null;

    /**
     * @ElementName communicationBarringProfile8
     * @Type \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:12571
     * @var \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $communicationBarringProfile8 = null;

    /**
     * @ElementName communicationBarringProfile9
     * @Type \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:12571
     * @var \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $communicationBarringProfile9 = null;

    /**
     * @ElementName networkTranslationIndex
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:12571
     * @MinLength 1
     * @MaxLength 128
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $networkTranslationIndex = null;

    /**
     * @ElementName callProcessingPolicyProfileName
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:12571
     * @MinLength 1
     * @MaxLength 40
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
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
     * Getter for newName
     *
     * @return string
     */
    public function getNewName()
    {
        return $this->newName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newName;
    }

    /**
     * Setter for newName
     *
     * @param string $newName
     * @return $this
     */
    public function setNewName($newName)
    {
        $this->newName = $newName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewName()
    {
        $this->newName = null;
        return $this;
    }

    /**
     * Getter for description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description = null)
    {
        if ($description === null) {
            $this->description = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->description = $description;
        }
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null
     */
    public function getCommunicationBarringProfile0()
    {
        return $this->communicationBarringProfile0 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->communicationBarringProfile0;
    }

    /**
     * Setter for communicationBarringProfile0
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null $communicationBarringProfile0
     * @return $this
     */
    public function setCommunicationBarringProfile0(\CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile0 = null)
    {
        if ($communicationBarringProfile0 === null) {
            $this->communicationBarringProfile0 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->communicationBarringProfile0 = $communicationBarringProfile0;
        }
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null
     */
    public function getCommunicationBarringProfile1()
    {
        return $this->communicationBarringProfile1 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->communicationBarringProfile1;
    }

    /**
     * Setter for communicationBarringProfile1
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null $communicationBarringProfile1
     * @return $this
     */
    public function setCommunicationBarringProfile1(\CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile1 = null)
    {
        if ($communicationBarringProfile1 === null) {
            $this->communicationBarringProfile1 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->communicationBarringProfile1 = $communicationBarringProfile1;
        }
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null
     */
    public function getCommunicationBarringProfile2()
    {
        return $this->communicationBarringProfile2 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->communicationBarringProfile2;
    }

    /**
     * Setter for communicationBarringProfile2
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null $communicationBarringProfile2
     * @return $this
     */
    public function setCommunicationBarringProfile2(\CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile2 = null)
    {
        if ($communicationBarringProfile2 === null) {
            $this->communicationBarringProfile2 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->communicationBarringProfile2 = $communicationBarringProfile2;
        }
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null
     */
    public function getCommunicationBarringProfile3()
    {
        return $this->communicationBarringProfile3 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->communicationBarringProfile3;
    }

    /**
     * Setter for communicationBarringProfile3
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null $communicationBarringProfile3
     * @return $this
     */
    public function setCommunicationBarringProfile3(\CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile3 = null)
    {
        if ($communicationBarringProfile3 === null) {
            $this->communicationBarringProfile3 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->communicationBarringProfile3 = $communicationBarringProfile3;
        }
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null
     */
    public function getCommunicationBarringProfile4()
    {
        return $this->communicationBarringProfile4 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->communicationBarringProfile4;
    }

    /**
     * Setter for communicationBarringProfile4
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null $communicationBarringProfile4
     * @return $this
     */
    public function setCommunicationBarringProfile4(\CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile4 = null)
    {
        if ($communicationBarringProfile4 === null) {
            $this->communicationBarringProfile4 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->communicationBarringProfile4 = $communicationBarringProfile4;
        }
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null
     */
    public function getCommunicationBarringProfile5()
    {
        return $this->communicationBarringProfile5 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->communicationBarringProfile5;
    }

    /**
     * Setter for communicationBarringProfile5
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null $communicationBarringProfile5
     * @return $this
     */
    public function setCommunicationBarringProfile5(\CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile5 = null)
    {
        if ($communicationBarringProfile5 === null) {
            $this->communicationBarringProfile5 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->communicationBarringProfile5 = $communicationBarringProfile5;
        }
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null
     */
    public function getCommunicationBarringProfile6()
    {
        return $this->communicationBarringProfile6 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->communicationBarringProfile6;
    }

    /**
     * Setter for communicationBarringProfile6
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null $communicationBarringProfile6
     * @return $this
     */
    public function setCommunicationBarringProfile6(\CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile6 = null)
    {
        if ($communicationBarringProfile6 === null) {
            $this->communicationBarringProfile6 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->communicationBarringProfile6 = $communicationBarringProfile6;
        }
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null
     */
    public function getCommunicationBarringProfile7()
    {
        return $this->communicationBarringProfile7 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->communicationBarringProfile7;
    }

    /**
     * Setter for communicationBarringProfile7
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null $communicationBarringProfile7
     * @return $this
     */
    public function setCommunicationBarringProfile7(\CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile7 = null)
    {
        if ($communicationBarringProfile7 === null) {
            $this->communicationBarringProfile7 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->communicationBarringProfile7 = $communicationBarringProfile7;
        }
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null
     */
    public function getCommunicationBarringProfile8()
    {
        return $this->communicationBarringProfile8 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->communicationBarringProfile8;
    }

    /**
     * Setter for communicationBarringProfile8
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null $communicationBarringProfile8
     * @return $this
     */
    public function setCommunicationBarringProfile8(\CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile8 = null)
    {
        if ($communicationBarringProfile8 === null) {
            $this->communicationBarringProfile8 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->communicationBarringProfile8 = $communicationBarringProfile8;
        }
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null
     */
    public function getCommunicationBarringProfile9()
    {
        return $this->communicationBarringProfile9 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->communicationBarringProfile9;
    }

    /**
     * Setter for communicationBarringProfile9
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null $communicationBarringProfile9
     * @return $this
     */
    public function setCommunicationBarringProfile9(\CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile9 = null)
    {
        if ($communicationBarringProfile9 === null) {
            $this->communicationBarringProfile9 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->communicationBarringProfile9 = $communicationBarringProfile9;
        }
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
     * @return string|null
     */
    public function getNetworkTranslationIndex()
    {
        return $this->networkTranslationIndex instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkTranslationIndex;
    }

    /**
     * Setter for networkTranslationIndex
     *
     * @param string|null $networkTranslationIndex
     * @return $this
     */
    public function setNetworkTranslationIndex($networkTranslationIndex = null)
    {
        if ($networkTranslationIndex === null) {
            $this->networkTranslationIndex = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->networkTranslationIndex = $networkTranslationIndex;
        }
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
     * @return string|null
     */
    public function getCallProcessingPolicyProfileName()
    {
        return $this->callProcessingPolicyProfileName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callProcessingPolicyProfileName;
    }

    /**
     * Setter for callProcessingPolicyProfileName
     *
     * @param string|null $callProcessingPolicyProfileName
     * @return $this
     */
    public function setCallProcessingPolicyProfileName($callProcessingPolicyProfileName = null)
    {
        if ($callProcessingPolicyProfileName === null) {
            $this->callProcessingPolicyProfileName = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->callProcessingPolicyProfileName = $callProcessingPolicyProfileName;
        }
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

