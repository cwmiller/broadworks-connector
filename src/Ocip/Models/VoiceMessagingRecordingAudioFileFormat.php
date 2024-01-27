<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * VoiceMessagingRecordingAudioFileFormat
 *
 * The media type of a voice message.
 *         WAV - A WAV file
 *         MP3 - an MP3 file
 *
 * @method static VoiceMessagingRecordingAudioFileFormat WAV()
 * @method static VoiceMessagingRecordingAudioFileFormat MP3()
 * @EnumValueType string
 */
class VoiceMessagingRecordingAudioFileFormat extends \MyCLabs\Enum\Enum
{
    public const WAV = 'WAV';

    public const MP3 = 'MP3';
}

