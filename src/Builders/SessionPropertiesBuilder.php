<?php

namespace SquareetLabs\LaravelOpenVidu\Builders;

use SquareetLabs\LaravelOpenVidu\Enums\MediaMode;
use SquareetLabs\LaravelOpenVidu\Enums\OutputMode;
use SquareetLabs\LaravelOpenVidu\Enums\RecordingLayout;
use SquareetLabs\LaravelOpenVidu\Enums\RecordingMode;
use SquareetLabs\LaravelOpenVidu\SessionProperties;

/**
 * Class SessionPropertiesFactory
 * @package SquareetLabs\LaravelOpenVidu\Builders
 */
class SessionPropertiesBuilder
{
    /**
     * @param $properties
     * @return SessionProperties|null
     */
    public static function build($properties)
    {
        if (is_array($properties)) {
            return new SessionProperties(
                array_key_exists('mediaMode', $properties) ? $properties['mediaMode'] : MediaMode::ROUTED,
                array_key_exists('recordingMode', $properties) ? $properties['recordingMode'] : RecordingMode::MANUAL,
                array_key_exists('defaultOutputMode', $properties) ? $properties['defaultOutputMode'] : OutputMode::COMPOSED,
                array_key_exists('defaultRecordingLayout', $properties) ? $properties['defaultRecordingLayout'] : RecordingLayout::BEST_FIT,
                array_key_exists('customSessionId', $properties) ? $properties['customSessionId'] : null,
                array_key_exists('defaultCustomLayout', $properties) ? $properties['defaultCustomLayout'] : null
            );
        }
        return null;

    }
}
