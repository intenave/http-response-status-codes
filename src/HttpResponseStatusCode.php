<?php

declare(strict_types = 1);

namespace Intenave\HttpResponseStatusCodes;

enum HttpResponseStatusCode: int
{
    // Informational https://developer.mozilla.org/en-US/docs/Web/HTTP/Status#information_responses
    case CONTINUE = 100;
    case SWITCHING_PROTOCOLS = 101;
    case PROCESSING = 102;
    case EARLY_HINTS = 103;

    // Successful https://developer.mozilla.org/en-US/docs/Web/HTTP/Status#successful_responses
    case OK = 200;
    case CREATED = 201;
    case ACCEPTED = 202;
    case NON_AUTHORITATIVE_INFORMATION = 203;
    case NO_CONTENT = 204;
    case RESET_CONTENT = 205;
    case PARTIAL_CONTENT = 206;
    case MULTI_STATUS = 207;
    case ALREADY_REPORTED = 208;
    case IM_USED = 226;

    // Redirection https://developer.mozilla.org/en-US/docs/Web/HTTP/Status#redirection_messages
    case MULTIPLE_CHOICES = 300;
    case MOVED_PERMANENTLY = 301;
    case FOUND = 302;
    case SEE_OTHER = 303;
    case NOT_MODIFIED = 304;
    case USE_PROXY = 305;
    case TEMPORARY_REDIRECT = 307;
    case PERMANENT_REDIRECT = 308;

    // Client Error https://developer.mozilla.org/en-US/docs/Web/HTTP/Status#client_error_responses
    case BAD_REQUEST = 400;
    case UNAUTHORIZED = 401;
    case PAYMENT_REQUIRED = 402;
    case FORBIDDEN = 403;
    case NOT_FOUND = 404;
    case METHOD_NOT_ALLOWED = 405;
    case NOT_ACCEPTABLE = 406;
    case PROXY_AUTHENTICATION_REQUIRED = 407;
    case REQUEST_TIMEOUT = 408;
    case CONFLICT = 409;
    case GONE = 410;
    case LENGTH_REQUIRED = 411;
    case PRECONDITION_FAILED = 412;
    case PAYLOAD_TOO_LARGE = 413;
    case URI_TOO_LONG = 414;
    case UNSUPPORTED_MEDIA_TYPE = 415;
    case RANGE_NOT_SATISFIABLE = 416;
    case EXPECTATION_FAILED = 417;
    case IM_A_TEAPOT = 418;
    case MISDIRECTED_REQUEST = 421;
    case UNPROCESSABLE_ENTITY = 422;
    case LOCKED = 423;
    case FAILED_DEPENDENCY = 424;
    case TOO_EARLY = 425;
    case UPGRADE_REQUIRED = 426;
    case PRECONDITION_REQUIRED = 428;
    case TOO_MANY_REQUESTS = 429;
    case REQUEST_HEADER_FIELDS_TOO_LARGE = 431;
    case UNAVAILABLE_FOR_LEGAL_REASONS = 451;

    // Server Error https://developer.mozilla.org/en-US/docs/Web/HTTP/Status#server_error_responses
    case INTERNAL_SERVER_ERROR = 500;
    case NOT_IMPLEMENTED = 501;
    case BAD_GATEWAY = 502;
    case SERVICE_UNAVAILABLE = 503;
    case GATEWAY_TIMEOUT = 504;
    case HTTP_VERSION_NOT_SUPPORTED = 505;
    case VARIANT_ALSO_NEGOTIATES = 506;
    case INSUFFICIENT_STORAGE = 507;
    case LOOP_DETECTED = 508;
    case NOT_EXTENDED = 510;
    case NETWORK_AUTHENTICATION_REQUIRED = 511;

    // region static methods

    /**
     * Returns HTTP status code 100 (Continue).
     */
    public static function CONTINUE(): int
    {
        return self::CONTINUE->value;
    }

    /**
     * Returns HTTP status code 101 (Switching Protocols).
     */
    public static function SWITCHING_PROTOCOLS(): int
    {
        return self::SWITCHING_PROTOCOLS->value;
    }

    /**
     * Returns HTTP status code 102 (Processing).
     */
    public static function PROCESSING(): int
    {
        return self::PROCESSING->value;
    }

    /**
     * Returns HTTP status code 103 (Early Hints).
     */
    public static function EARLY_HINTS(): int
    {
        return self::EARLY_HINTS->value;
    }

    /**
     * Returns HTTP status code 200 (OK).
     */
    public static function OK(): int
    {
        return self::OK->value;
    }

    /**
     * Returns HTTP status code 201 (Created).
     */
    public static function CREATED(): int
    {
        return self::CREATED->value;
    }

    /**
     * Returns HTTP status code 202 (Accepted).
     */
    public static function ACCEPTED(): int
    {
        return self::ACCEPTED->value;
    }

    /**
     * Returns HTTP status code 203 (Non-Authoritative Information).
     */
    public static function NON_AUTHORITATIVE_INFORMATION(): int
    {
        return self::NON_AUTHORITATIVE_INFORMATION->value;
    }

    /**
     * Returns HTTP status code 202 (No Content).
     */
    public static function NO_CONTENT(): int
    {
        return self::NO_CONTENT->value;
    }

    /**
     * Returns HTTP status code 205 (Reset Content).
     */
    public static function RESET_CONTENT(): int
    {
        return self::RESET_CONTENT->value;
    }

    /**
     * Returns HTTP status code 206 (Partial Content).
     */
    public static function PARTIAL_CONTENT(): int
    {
        return self::PARTIAL_CONTENT->value;
    }

    /**
     * Returns HTTP status code 207 (Multi-Status).
     */
    public static function MULTI_STATUS(): int
    {
        return self::MULTI_STATUS->value;
    }

    /**
     * Returns HTTP status code 208 (Already Reported).
     */
    public static function ALREADY_REPORTED(): int
    {
        return self::ALREADY_REPORTED->value;
    }

    /**
     * Returns HTTP status code 226 (IM Used).
     */
    public static function IM_USED(): int
    {
        return self::IM_USED->value;
    }

    /**
     * Returns HTTP status code 300 (Multiple Choices).
     */
    public static function MULTIPLE_CHOICES(): int
    {
        return self::MULTIPLE_CHOICES->value;
    }

    /**
     * Returns HTTP status code 301 (Moved Permanently).
     */
    public static function MOVED_PERMANENTLY(): int
    {
        return self::MOVED_PERMANENTLY->value;
    }

    /**
     * Returns HTTP status code 302 (Found).
     */
    public static function FOUND(): int
    {
        return self::FOUND->value;
    }

    /**
     * Returns HTTP status code 303 (See Other).
     */
    public static function SEE_OTHER(): int
    {
        return self::SEE_OTHER->value;
    }

    /**
     * Returns HTTP status code 304 (Not Modified).
     */
    public static function NOT_MODIFIED(): int
    {
        return self::NOT_MODIFIED->value;
    }

    /**
     * Returns HTTP status code 305 (Use Proxy).
     */
    public static function USE_PROXY(): int
    {
        return self::USE_PROXY->value;
    }

    /**
     * Returns HTTP status code 307 (Temporary Redirect).
     */
    public static function TEMPORARY_REDIRECT(): int
    {
        return self::TEMPORARY_REDIRECT->value;
    }

    /**
     * Returns HTTP status code 308 (Permanent Redirect).
     */
    public static function PERMANENT_REDIRECT(): int
    {
        return self::PERMANENT_REDIRECT->value;
    }

    /**
     * Returns HTTP status code 400 (Bad Request).
     */
    public static function BAD_REQUEST(): int
    {
        return self::BAD_REQUEST->value;
    }

    /**
     * Returns HTTP status code 401 (Unauthorized).
     */
    public static function UNAUTHORIZED(): int
    {
        return self::UNAUTHORIZED->value;
    }

    /**
     * Returns HTTP status code 402 (Payment Required).
     */
    public static function PAYMENT_REQUIRED(): int
    {
        return self::PAYMENT_REQUIRED->value;
    }

    /**
     * Returns HTTP status code 403 (Forbidden).
     */
    public static function FORBIDDEN(): int
    {
        return self::FORBIDDEN->value;
    }

    /**
     * Returns HTTP status code 404 (Not Found).
     */
    public static function NOT_FOUND(): int
    {
        return self::NOT_FOUND->value;
    }

    /**
     * Returns HTTP status code 405 (Method Not Allowed).
     */
    public static function METHOD_NOT_ALLOWED(): int
    {
        return self::METHOD_NOT_ALLOWED->value;
    }

    /**
     * Returns HTTP status code 406 (Not Acceptable).
     */
    public static function NOT_ACCEPTABLE(): int
    {
        return self::NOT_ACCEPTABLE->value;
    }

    /**
     * Returns HTTP status code 407 (Proxy Authentication Required).
     */
    public static function PROXY_AUTHENTICATION_REQUIRED(): int
    {
        return self::PROXY_AUTHENTICATION_REQUIRED->value;
    }

    /**
     * Returns HTTP status code 408 (Request Timeout).
     */
    public static function REQUEST_TIMEOUT(): int
    {
        return self::REQUEST_TIMEOUT->value;
    }

    /**
     * Returns HTTP status code 409 (Conflict).
     */
    public static function CONFLICT(): int
    {
        return self::CONFLICT->value;
    }

    /**
     * Returns HTTP status code 410 (Gone).
     */
    public static function GONE(): int
    {
        return self::GONE->value;
    }

    /**
     * Returns HTTP status code 411 (Length Required).
     */
    public static function LENGTH_REQUIRED(): int
    {
        return self::LENGTH_REQUIRED->value;
    }

    /**
     * Returns HTTP status code 412 (Precondition Failed).
     */
    public static function PRECONDITION_FAILED(): int
    {
        return self::PRECONDITION_FAILED->value;
    }

    /**
     * Returns HTTP status code 413 (Payload Too Large).
     */
    public static function PAYLOAD_TOO_LARGE(): int
    {
        return self::PAYLOAD_TOO_LARGE->value;
    }

    /**
     * Returns HTTP status code 414 (URI Too Long).
     */
    public static function URI_TOO_LONG(): int
    {
        return self::URI_TOO_LONG->value;
    }

    /**
     * Returns HTTP status code 415 (Unsupported Media Type).
     */
    public static function UNSUPPORTED_MEDIA_TYPE(): int
    {
        return self::UNSUPPORTED_MEDIA_TYPE->value;
    }

    /**
     * Returns HTTP status code 416 (Range Not Satisfiable).
     */
    public static function RANGE_NOT_SATISFIABLE(): int
    {
        return self::RANGE_NOT_SATISFIABLE->value;
    }

    /**
     * Returns HTTP status code 417 (Expectation Failed).
     */
    public static function EXPECTATION_FAILED(): int
    {
        return self::EXPECTATION_FAILED->value;
    }

    /**
     * Returns HTTP status code 418 (I'm a teapot).
     */
    public static function IM_A_TEAPOT(): int
    {
        return self::IM_A_TEAPOT->value;
    }

    /**
     * Returns HTTP status code 421 (Misdirected Request).
     */
    public static function MISDIRECTED_REQUEST(): int
    {
        return self::MISDIRECTED_REQUEST->value;
    }

    /**
     * Returns HTTP status code 422 (Unprocessable Entity).
     */
    public static function UNPROCESSABLE_ENTITY(): int
    {
        return self::UNPROCESSABLE_ENTITY->value;
    }

    /**
     * Returns HTTP status code 423 (Locked).
     */
    public static function LOCKED(): int
    {
        return self::LOCKED->value;
    }

    /**
     * Returns HTTP status code 424 (Failed Dependency).
     */
    public static function FAILED_DEPENDENCY(): int
    {
        return self::FAILED_DEPENDENCY->value;
    }

    /**
     * Returns HTTP status code 425 (Too Early).
     */
    public static function TOO_EARLY(): int
    {
        return self::TOO_EARLY->value;
    }

    /**
     * Returns HTTP status code 426 (Upgrade Required).
     */
    public static function UPGRADE_REQUIRED(): int
    {
        return self::UPGRADE_REQUIRED->value;
    }

    /**
     * Returns HTTP status code 428 (Precondition Required).
     */
    public static function PRECONDITION_REQUIRED(): int
    {
        return self::PRECONDITION_REQUIRED->value;
    }

    /**
     * Returns HTTP status code 429 (Too Many Requests).
     */
    public static function TOO_MANY_REQUESTS(): int
    {
        return self::TOO_MANY_REQUESTS->value;
    }

    /**
     * Returns HTTP status code 431 (Request Header Fields Too Large).
     */
    public static function REQUEST_HEADER_FIELDS_TOO_LARGE(): int
    {
        return self::REQUEST_HEADER_FIELDS_TOO_LARGE->value;
    }

    /**
     * Returns HTTP status code 451 (Unavailable For Legal Reasons).
     */
    public static function UNAVAILABLE_FOR_LEGAL_REASONS(): int
    {
        return self::UNAVAILABLE_FOR_LEGAL_REASONS->value;
    }

    /**
     * Returns HTTP status code 500 (Internal Server Error).
     */
    public static function INTERNAL_SERVER_ERROR(): int
    {
        return self::INTERNAL_SERVER_ERROR->value;
    }

    /**
     * Returns HTTP status code 501 (Not Implemented).
     */
    public static function NOT_IMPLEMENTED(): int
    {
        return self::NOT_IMPLEMENTED->value;
    }

    /**
     * Returns HTTP status code 502 (Bad Gateway).
     */
    public static function BAD_GATEWAY(): int
    {
        return self::BAD_GATEWAY->value;
    }

    /**
     * Returns HTTP status code 503 (Service Unavailable).
     */
    public static function SERVICE_UNAVAILABLE(): int
    {
        return self::SERVICE_UNAVAILABLE->value;
    }

    /**
     * Returns HTTP status code 504 (Gateway Timeout).
     */
    public static function GATEWAY_TIMEOUT(): int
    {
        return self::GATEWAY_TIMEOUT->value;
    }

    /**
     * Returns HTTP status code 505 (HTTP Version Not Supported).
     */
    public static function HTTP_VERSION_NOT_SUPPORTED(): int
    {
        return self::HTTP_VERSION_NOT_SUPPORTED->value;
    }

    /**
     * Returns HTTP status code 506 (Variant Also Negotiates).
     */
    public static function VARIANT_ALSO_NEGOTIATES(): int
    {
        return self::VARIANT_ALSO_NEGOTIATES->value;
    }

    /**
     * Returns HTTP status code 507 (Insufficient Storage).
     */
    public static function INSUFFICIENT_STORAGE(): int
    {
        return self::INSUFFICIENT_STORAGE->value;
    }

    /**
     * Returns HTTP status code 508 (Loop Detected).
     */
    public static function LOOP_DETECTED(): int
    {
        return self::LOOP_DETECTED->value;
    }

    /**
     * Returns HTTP status code 510 (Not Extended).
     */
    public static function NOT_EXTENDED(): int
    {
        return self::NOT_EXTENDED->value;
    }

    /**
     * Returns HTTP status code 511 (Network Authentication Required).
     */
    public static function NETWORK_AUTHENTICATION_REQUIRED(): int
    {
        return self::NETWORK_AUTHENTICATION_REQUIRED->value;
    }
    // endregion static methods

    public static function codes(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function names(): array
    {
        return array_column(self::cases(), 'name');
    }

    public static function options(): array
    {
        return array_column(self::cases(), 'value', 'name');
    }

    public static function informationalCodes(): array
    {

        return array_column(self::filter(static fn ($code) => $code >= 100 && $code < 200), 'value');
    }

    public static function successCodes(): array
    {
        return array_column(self::filter(static fn ($code) => $code >= 200 && $code < 300), 'value');
    }

    public static function redirectionCodes(): array
    {
        return array_column(self::filter(static fn ($code) => $code >= 300 && $code < 400), 'value');
    }

    public static function clientErrorCodes(): array
    {
        return array_column(self::filter(static fn ($code) => $code >= 400 && $code < 500), 'value');
    }

    public static function serverErrorCodes(): array
    {
        return array_column(self::filter(static fn ($code) => $code >= 500 && $code < 600), 'value');
    }

    public static function fromCode(int $i): self
    {
        return self::from($i);
    }

    public function isInformational(): bool
    {
        return $this->value >= 100 && $this->value < 200;
    }

    public function isSuccess(): bool
    {
        return $this->value >= 200 && $this->value < 300;
    }

    public function isRedirection(): bool
    {
        return $this->value >= 300 && $this->value < 400;
    }

    public function isClientError(): bool
    {
        return $this->value >= 400 && $this->value < 500;
    }

    public function isServerError(): bool
    {
        return $this->value >= 500 && $this->value < 600;
    }

    private static function filter(callable|null $filter = null): array
    {
        $cases = [];
        foreach (self::cases() as $statusCode) {
            if ($filter === null || $filter($statusCode->value)) {
                $cases[] = $statusCode;
            }
        }

        return $cases;
    }

}
