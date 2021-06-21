<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemStirShakenGetResponse
 *
 * Response to the SystemStirShakenGetRequest.
 *
 * @see SystemStirShakenGetRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:17905","type":"sequence"}]
 */
class SystemStirShakenGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName signingPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\StirShakenSigningPolicy
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17905
     * @var \CWM\BroadWorksConnector\Ocip\Models\StirShakenSigningPolicy|null
     */
    private $signingPolicy = null;

    /**
     * @ElementName taggingPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\StirShakenTaggingPolicy
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17905
     * @var \CWM\BroadWorksConnector\Ocip\Models\StirShakenTaggingPolicy|null
     */
    private $taggingPolicy = null;

    /**
     * @ElementName signEmergencyCalls
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17905
     * @var bool|null
     */
    private $signEmergencyCalls = null;

    /**
     * @ElementName tagEmergencyCalls
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17905
     * @var bool|null
     */
    private $tagEmergencyCalls = null;

    /**
     * @ElementName signingServiceURL
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17905
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $signingServiceURL = null;

    /**
     * @ElementName tagFromOrPAI
     * @Type \CWM\BroadWorksConnector\Ocip\Models\StirShakenTagFromOrPAI
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17905
     * @var \CWM\BroadWorksConnector\Ocip\Models\StirShakenTagFromOrPAI|null
     */
    private $tagFromOrPAI = null;

    /**
     * @ElementName verstatTag
     * @Type \CWM\BroadWorksConnector\Ocip\Models\StirShakenVerstatTag
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17905
     * @var \CWM\BroadWorksConnector\Ocip\Models\StirShakenVerstatTag|null
     */
    private $verstatTag = null;

    /**
     * @ElementName useOSValueForOrigId
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17905
     * @var bool|null
     */
    private $useOSValueForOrigId = null;

    /**
     * @ElementName origUUID
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17905
     * @MaxLength 36
     * @var string|null
     */
    private $origUUID = null;

    /**
     * @ElementName attestationLevel
     * @Type \CWM\BroadWorksConnector\Ocip\Models\StirShakenAttestationLevel
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17905
     * @var \CWM\BroadWorksConnector\Ocip\Models\StirShakenAttestationLevel|null
     */
    private $attestationLevel = null;

    /**
     * @ElementName enableVerification
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17905
     * @var bool|null
     */
    private $enableVerification = null;

    /**
     * @ElementName verificationServiceURL
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17905
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $verificationServiceURL = null;

    /**
     * @ElementName verificationErrorHandling
     * @Type \CWM\BroadWorksConnector\Ocip\Models\StirShakenVerificationErrorHandling
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17905
     * @var \CWM\BroadWorksConnector\Ocip\Models\StirShakenVerificationErrorHandling|null
     */
    private $verificationErrorHandling = null;

    /**
     * @ElementName proxyVerstatToCNAMSubscribe
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17905
     * @var bool|null
     */
    private $proxyVerstatToCNAMSubscribe = null;

    /**
     * @ElementName useUnknownHeadersFromCNAMNotify
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17905
     * @var bool|null
     */
    private $useUnknownHeadersFromCNAMNotify = null;

    /**
     * @ElementName useTS24229Headers
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17905
     * @var bool|null
     */
    private $useTS24229Headers = null;

    /**
     * @ElementName enableSigningForUnscreenedTrunkGroupOriginations
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17905
     * @var bool|null
     */
    private $enableSigningForUnscreenedTrunkGroupOriginations = null;

    /**
     * @ElementName enableTaggingForUnscreenedTrunkGroupOriginations
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17905
     * @var bool|null
     */
    private $enableTaggingForUnscreenedTrunkGroupOriginations = null;

    /**
     * @ElementName unscreenedTrunkGroupOriginationAttestationLevel
     * @Type \CWM\BroadWorksConnector\Ocip\Models\StirShakenUnscreenedTrunkGroupOriginationAttestationLevel
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17905
     * @var \CWM\BroadWorksConnector\Ocip\Models\StirShakenUnscreenedTrunkGroupOriginationAttestationLevel|null
     */
    private $unscreenedTrunkGroupOriginationAttestationLevel = null;

    /**
     * @ElementName verifyGETSCalls
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17905
     * @var bool|null
     */
    private $verifyGETSCalls = null;

    /**
     * Getter for signingPolicy
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\StirShakenSigningPolicy
     */
    public function getSigningPolicy()
    {
        return $this->signingPolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->signingPolicy;
    }

    /**
     * Setter for signingPolicy
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\StirShakenSigningPolicy $signingPolicy
     * @return $this
     */
    public function setSigningPolicy(\CWM\BroadWorksConnector\Ocip\Models\StirShakenSigningPolicy $signingPolicy)
    {
        $this->signingPolicy = $signingPolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSigningPolicy()
    {
        $this->signingPolicy = null;
        return $this;
    }

    /**
     * Getter for taggingPolicy
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\StirShakenTaggingPolicy
     */
    public function getTaggingPolicy()
    {
        return $this->taggingPolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->taggingPolicy;
    }

    /**
     * Setter for taggingPolicy
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\StirShakenTaggingPolicy $taggingPolicy
     * @return $this
     */
    public function setTaggingPolicy(\CWM\BroadWorksConnector\Ocip\Models\StirShakenTaggingPolicy $taggingPolicy)
    {
        $this->taggingPolicy = $taggingPolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTaggingPolicy()
    {
        $this->taggingPolicy = null;
        return $this;
    }

    /**
     * Getter for signEmergencyCalls
     *
     * @return bool
     */
    public function getSignEmergencyCalls()
    {
        return $this->signEmergencyCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->signEmergencyCalls;
    }

    /**
     * Setter for signEmergencyCalls
     *
     * @param bool $signEmergencyCalls
     * @return $this
     */
    public function setSignEmergencyCalls($signEmergencyCalls)
    {
        $this->signEmergencyCalls = $signEmergencyCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSignEmergencyCalls()
    {
        $this->signEmergencyCalls = null;
        return $this;
    }

    /**
     * Getter for tagEmergencyCalls
     *
     * @return bool
     */
    public function getTagEmergencyCalls()
    {
        return $this->tagEmergencyCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->tagEmergencyCalls;
    }

    /**
     * Setter for tagEmergencyCalls
     *
     * @param bool $tagEmergencyCalls
     * @return $this
     */
    public function setTagEmergencyCalls($tagEmergencyCalls)
    {
        $this->tagEmergencyCalls = $tagEmergencyCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTagEmergencyCalls()
    {
        $this->tagEmergencyCalls = null;
        return $this;
    }

    /**
     * Getter for signingServiceURL
     *
     * @return string
     */
    public function getSigningServiceURL()
    {
        return $this->signingServiceURL instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->signingServiceURL;
    }

    /**
     * Setter for signingServiceURL
     *
     * @param string $signingServiceURL
     * @return $this
     */
    public function setSigningServiceURL($signingServiceURL)
    {
        $this->signingServiceURL = $signingServiceURL;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSigningServiceURL()
    {
        $this->signingServiceURL = null;
        return $this;
    }

    /**
     * Getter for tagFromOrPAI
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\StirShakenTagFromOrPAI
     */
    public function getTagFromOrPAI()
    {
        return $this->tagFromOrPAI instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->tagFromOrPAI;
    }

    /**
     * Setter for tagFromOrPAI
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\StirShakenTagFromOrPAI $tagFromOrPAI
     * @return $this
     */
    public function setTagFromOrPAI(\CWM\BroadWorksConnector\Ocip\Models\StirShakenTagFromOrPAI $tagFromOrPAI)
    {
        $this->tagFromOrPAI = $tagFromOrPAI;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTagFromOrPAI()
    {
        $this->tagFromOrPAI = null;
        return $this;
    }

    /**
     * Getter for verstatTag
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\StirShakenVerstatTag
     */
    public function getVerstatTag()
    {
        return $this->verstatTag instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->verstatTag;
    }

    /**
     * Setter for verstatTag
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\StirShakenVerstatTag $verstatTag
     * @return $this
     */
    public function setVerstatTag(\CWM\BroadWorksConnector\Ocip\Models\StirShakenVerstatTag $verstatTag)
    {
        $this->verstatTag = $verstatTag;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVerstatTag()
    {
        $this->verstatTag = null;
        return $this;
    }

    /**
     * Getter for useOSValueForOrigId
     *
     * @return bool
     */
    public function getUseOSValueForOrigId()
    {
        return $this->useOSValueForOrigId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useOSValueForOrigId;
    }

    /**
     * Setter for useOSValueForOrigId
     *
     * @param bool $useOSValueForOrigId
     * @return $this
     */
    public function setUseOSValueForOrigId($useOSValueForOrigId)
    {
        $this->useOSValueForOrigId = $useOSValueForOrigId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseOSValueForOrigId()
    {
        $this->useOSValueForOrigId = null;
        return $this;
    }

    /**
     * Getter for origUUID
     *
     * @return string
     */
    public function getOrigUUID()
    {
        return $this->origUUID instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->origUUID;
    }

    /**
     * Setter for origUUID
     *
     * @param string $origUUID
     * @return $this
     */
    public function setOrigUUID($origUUID)
    {
        $this->origUUID = $origUUID;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOrigUUID()
    {
        $this->origUUID = null;
        return $this;
    }

    /**
     * Getter for attestationLevel
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\StirShakenAttestationLevel
     */
    public function getAttestationLevel()
    {
        return $this->attestationLevel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->attestationLevel;
    }

    /**
     * Setter for attestationLevel
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\StirShakenAttestationLevel $attestationLevel
     * @return $this
     */
    public function setAttestationLevel(\CWM\BroadWorksConnector\Ocip\Models\StirShakenAttestationLevel $attestationLevel)
    {
        $this->attestationLevel = $attestationLevel;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAttestationLevel()
    {
        $this->attestationLevel = null;
        return $this;
    }

    /**
     * Getter for enableVerification
     *
     * @return bool
     */
    public function getEnableVerification()
    {
        return $this->enableVerification instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableVerification;
    }

    /**
     * Setter for enableVerification
     *
     * @param bool $enableVerification
     * @return $this
     */
    public function setEnableVerification($enableVerification)
    {
        $this->enableVerification = $enableVerification;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableVerification()
    {
        $this->enableVerification = null;
        return $this;
    }

    /**
     * Getter for verificationServiceURL
     *
     * @return string
     */
    public function getVerificationServiceURL()
    {
        return $this->verificationServiceURL instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->verificationServiceURL;
    }

    /**
     * Setter for verificationServiceURL
     *
     * @param string $verificationServiceURL
     * @return $this
     */
    public function setVerificationServiceURL($verificationServiceURL)
    {
        $this->verificationServiceURL = $verificationServiceURL;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVerificationServiceURL()
    {
        $this->verificationServiceURL = null;
        return $this;
    }

    /**
     * Getter for verificationErrorHandling
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\StirShakenVerificationErrorHandling
     */
    public function getVerificationErrorHandling()
    {
        return $this->verificationErrorHandling instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->verificationErrorHandling;
    }

    /**
     * Setter for verificationErrorHandling
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\StirShakenVerificationErrorHandling $verificationErrorHandling
     * @return $this
     */
    public function setVerificationErrorHandling(\CWM\BroadWorksConnector\Ocip\Models\StirShakenVerificationErrorHandling $verificationErrorHandling)
    {
        $this->verificationErrorHandling = $verificationErrorHandling;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVerificationErrorHandling()
    {
        $this->verificationErrorHandling = null;
        return $this;
    }

    /**
     * Getter for proxyVerstatToCNAMSubscribe
     *
     * @return bool
     */
    public function getProxyVerstatToCNAMSubscribe()
    {
        return $this->proxyVerstatToCNAMSubscribe instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->proxyVerstatToCNAMSubscribe;
    }

    /**
     * Setter for proxyVerstatToCNAMSubscribe
     *
     * @param bool $proxyVerstatToCNAMSubscribe
     * @return $this
     */
    public function setProxyVerstatToCNAMSubscribe($proxyVerstatToCNAMSubscribe)
    {
        $this->proxyVerstatToCNAMSubscribe = $proxyVerstatToCNAMSubscribe;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProxyVerstatToCNAMSubscribe()
    {
        $this->proxyVerstatToCNAMSubscribe = null;
        return $this;
    }

    /**
     * Getter for useUnknownHeadersFromCNAMNotify
     *
     * @return bool
     */
    public function getUseUnknownHeadersFromCNAMNotify()
    {
        return $this->useUnknownHeadersFromCNAMNotify instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useUnknownHeadersFromCNAMNotify;
    }

    /**
     * Setter for useUnknownHeadersFromCNAMNotify
     *
     * @param bool $useUnknownHeadersFromCNAMNotify
     * @return $this
     */
    public function setUseUnknownHeadersFromCNAMNotify($useUnknownHeadersFromCNAMNotify)
    {
        $this->useUnknownHeadersFromCNAMNotify = $useUnknownHeadersFromCNAMNotify;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseUnknownHeadersFromCNAMNotify()
    {
        $this->useUnknownHeadersFromCNAMNotify = null;
        return $this;
    }

    /**
     * Getter for useTS24229Headers
     *
     * @return bool
     */
    public function getUseTS24229Headers()
    {
        return $this->useTS24229Headers instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useTS24229Headers;
    }

    /**
     * Setter for useTS24229Headers
     *
     * @param bool $useTS24229Headers
     * @return $this
     */
    public function setUseTS24229Headers($useTS24229Headers)
    {
        $this->useTS24229Headers = $useTS24229Headers;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseTS24229Headers()
    {
        $this->useTS24229Headers = null;
        return $this;
    }

    /**
     * Getter for enableSigningForUnscreenedTrunkGroupOriginations
     *
     * @return bool
     */
    public function getEnableSigningForUnscreenedTrunkGroupOriginations()
    {
        return $this->enableSigningForUnscreenedTrunkGroupOriginations instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableSigningForUnscreenedTrunkGroupOriginations;
    }

    /**
     * Setter for enableSigningForUnscreenedTrunkGroupOriginations
     *
     * @param bool $enableSigningForUnscreenedTrunkGroupOriginations
     * @return $this
     */
    public function setEnableSigningForUnscreenedTrunkGroupOriginations($enableSigningForUnscreenedTrunkGroupOriginations)
    {
        $this->enableSigningForUnscreenedTrunkGroupOriginations = $enableSigningForUnscreenedTrunkGroupOriginations;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableSigningForUnscreenedTrunkGroupOriginations()
    {
        $this->enableSigningForUnscreenedTrunkGroupOriginations = null;
        return $this;
    }

    /**
     * Getter for enableTaggingForUnscreenedTrunkGroupOriginations
     *
     * @return bool
     */
    public function getEnableTaggingForUnscreenedTrunkGroupOriginations()
    {
        return $this->enableTaggingForUnscreenedTrunkGroupOriginations instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableTaggingForUnscreenedTrunkGroupOriginations;
    }

    /**
     * Setter for enableTaggingForUnscreenedTrunkGroupOriginations
     *
     * @param bool $enableTaggingForUnscreenedTrunkGroupOriginations
     * @return $this
     */
    public function setEnableTaggingForUnscreenedTrunkGroupOriginations($enableTaggingForUnscreenedTrunkGroupOriginations)
    {
        $this->enableTaggingForUnscreenedTrunkGroupOriginations = $enableTaggingForUnscreenedTrunkGroupOriginations;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableTaggingForUnscreenedTrunkGroupOriginations()
    {
        $this->enableTaggingForUnscreenedTrunkGroupOriginations = null;
        return $this;
    }

    /**
     * Getter for unscreenedTrunkGroupOriginationAttestationLevel
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\StirShakenUnscreenedTrunkGroupOriginationAttestationLevel
     */
    public function getUnscreenedTrunkGroupOriginationAttestationLevel()
    {
        return $this->unscreenedTrunkGroupOriginationAttestationLevel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->unscreenedTrunkGroupOriginationAttestationLevel;
    }

    /**
     * Setter for unscreenedTrunkGroupOriginationAttestationLevel
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\StirShakenUnscreenedTrunkGroupOriginationAttestationLevel $unscreenedTrunkGroupOriginationAttestationLevel
     * @return $this
     */
    public function setUnscreenedTrunkGroupOriginationAttestationLevel(\CWM\BroadWorksConnector\Ocip\Models\StirShakenUnscreenedTrunkGroupOriginationAttestationLevel $unscreenedTrunkGroupOriginationAttestationLevel)
    {
        $this->unscreenedTrunkGroupOriginationAttestationLevel = $unscreenedTrunkGroupOriginationAttestationLevel;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUnscreenedTrunkGroupOriginationAttestationLevel()
    {
        $this->unscreenedTrunkGroupOriginationAttestationLevel = null;
        return $this;
    }

    /**
     * Getter for verifyGETSCalls
     *
     * @return bool
     */
    public function getVerifyGETSCalls()
    {
        return $this->verifyGETSCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->verifyGETSCalls;
    }

    /**
     * Setter for verifyGETSCalls
     *
     * @param bool $verifyGETSCalls
     * @return $this
     */
    public function setVerifyGETSCalls($verifyGETSCalls)
    {
        $this->verifyGETSCalls = $verifyGETSCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVerifyGETSCalls()
    {
        $this->verifyGETSCalls = null;
        return $this;
    }


}

