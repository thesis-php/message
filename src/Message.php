<?php

declare(strict_types=1);

namespace Thesis\Message;

/**
 * A common interface for messages: commands, events, calls.
 *
 * @api
 * @template-covariant TResult
 */
interface Message {}
