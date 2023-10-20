<?php

declare(strict_types = 1);

use Intenave\HttpResponseStatusCodes\HttpResponseStatusCode;

test('Codes return array with all http response codes', function (): void {
    HttpResponseStatusCode::codes();
    expect(HttpResponseStatusCode::codes())->toMatchArray([
        100,
        101,
        102,
        103,
        200,
        201,
        202,
        203,
        204,
        205,
        206,
        207,
        208,
        226,
        300,
        301,
        302,
        303,
        304,
        305,
        307,
        308,
        400,
        401,
        402,
        403,
        404,
        405,
        406,
        407,
        408,
        409,
        410,
        411,
        412,
        413,
        414,
        415,
        416,
        417,
        418,
        421,
        422,
        423,
        424,
        425,
        426,
        428,
        429,
        431,
        451,
        500,
        501,
        502,
        503,
        504,
        505,
        506,
        507,
        508,
        510,
        511,
    ]);
});

test('Informational codes return array with all http response codes', function (): void {
    HttpResponseStatusCode::informationalCodes();
    expect(HttpResponseStatusCode::informationalCodes())->toMatchArray([
        100,
        101,
        102,
        103,
    ]);
});

test('Success codes return array with all http response codes', function (): void {
    HttpResponseStatusCode::successCodes();
    expect(HttpResponseStatusCode::successCodes())->toMatchArray([
        200,
        201,
        202,
        203,
        204,
        205,
        206,
        207,
        208,
        226,
    ]);
});

test('Redirection codes return array with all http response codes', function (): void {
    HttpResponseStatusCode::redirectionCodes();
    expect(HttpResponseStatusCode::redirectionCodes())->toMatchArray([
        300,
        301,
        302,
        303,
        304,
        305,
        307,
        308,
    ]);
});

test('Client error codes return array with all http response codes', function (): void {
    HttpResponseStatusCode::clientErrorCodes();
    expect(HttpResponseStatusCode::clientErrorCodes())->toMatchArray([
        400,
        401,
        402,
        403,
        404,
        405,
        406,
        407,
        408,
        409,
        410,
        411,
        412,
        413,
        414,
        415,
        416,
        417,
        418,
        421,
        422,
        423,
        424,
        425,
        426,
        428,
        429,
        431,
        451,
    ]);
});

test('Server error codes return array with all http response codes', function (): void {
    HttpResponseStatusCode::serverErrorCodes();
    expect(HttpResponseStatusCode::serverErrorCodes())->toMatchArray([
        500,
        501,
        502,
        503,
        504,
        505,
        506,
        507,
        508,
        510,
        511,
    ]);
});

test('isInformational return correct value if code belongs to informational response', function (): void {
    foreach (HttpResponseStatusCode::informationalCodes() as $code) {
        expect(HttpResponseStatusCode::fromCode($code)->isInformational())->toBeTrue();
    }
    foreach (HttpResponseStatusCode::successCodes() as $code) {
        expect(HttpResponseStatusCode::fromCode($code)->isInformational())->toBeFalse();
    }
    foreach (HttpResponseStatusCode::redirectionCodes() as $code) {
        expect(HttpResponseStatusCode::fromCode($code)->isInformational())->toBeFalse();
    }
    foreach (HttpResponseStatusCode::clientErrorCodes() as $code) {
        expect(HttpResponseStatusCode::fromCode($code)->isInformational())->toBeFalse();
    }
    foreach (HttpResponseStatusCode::serverErrorCodes() as $code) {
        expect(HttpResponseStatusCode::fromCode($code)->isInformational())->toBeFalse();
    }

});

test('isSuccess return correct value if code belongs to success response', function (): void {
    foreach (HttpResponseStatusCode::informationalCodes() as $code) {
        expect(HttpResponseStatusCode::fromCode($code)->isSuccess())->toBeFalse();
    }
    foreach (HttpResponseStatusCode::successCodes() as $code) {
        expect(HttpResponseStatusCode::fromCode($code)->isSuccess())->toBeTrue();
    }
    foreach (HttpResponseStatusCode::redirectionCodes() as $code) {
        expect(HttpResponseStatusCode::fromCode($code)->isSuccess())->toBeFalse();
    }
    foreach (HttpResponseStatusCode::clientErrorCodes() as $code) {
        expect(HttpResponseStatusCode::fromCode($code)->isSuccess())->toBeFalse();
    }
    foreach (HttpResponseStatusCode::serverErrorCodes() as $code) {
        expect(HttpResponseStatusCode::fromCode($code)->isSuccess())->toBeFalse();
    }
});

test('isRedirection return correct value if code belongs to redirection response', function (): void {
    foreach (HttpResponseStatusCode::informationalCodes() as $code) {
        expect(HttpResponseStatusCode::fromCode($code)->isRedirection())->toBeFalse();
    }
    foreach (HttpResponseStatusCode::successCodes() as $code) {
        expect(HttpResponseStatusCode::fromCode($code)->isRedirection())->toBeFalse();
    }
    foreach (HttpResponseStatusCode::redirectionCodes() as $code) {
        expect(HttpResponseStatusCode::fromCode($code)->isRedirection())->toBeTrue();
    }
    foreach (HttpResponseStatusCode::clientErrorCodes() as $code) {
        expect(HttpResponseStatusCode::fromCode($code)->isRedirection())->toBeFalse();
    }
    foreach (HttpResponseStatusCode::serverErrorCodes() as $code) {
        expect(HttpResponseStatusCode::fromCode($code)->isRedirection())->toBeFalse();
    }
});

test('isClientError return correct value if code belongs to client errors', function (): void {
    foreach (HttpResponseStatusCode::informationalCodes() as $code) {
        expect(HttpResponseStatusCode::fromCode($code)->isClientError())->toBeFalse();
    }
    foreach (HttpResponseStatusCode::successCodes() as $code) {
        expect(HttpResponseStatusCode::fromCode($code)->isClientError())->toBeFalse();
    }
    foreach (HttpResponseStatusCode::redirectionCodes() as $code) {
        expect(HttpResponseStatusCode::fromCode($code)->isClientError())->toBeFalse();
    }
    foreach (HttpResponseStatusCode::clientErrorCodes() as $code) {
        expect(HttpResponseStatusCode::fromCode($code)->isClientError())->toBeTrue();
    }
    foreach (HttpResponseStatusCode::serverErrorCodes() as $code) {
        expect(HttpResponseStatusCode::fromCode($code)->isClientError())->toBeFalse();
    }
});

test('isServerError return correct value if code belongs to server errors', function (): void {
    foreach (HttpResponseStatusCode::informationalCodes() as $code) {
        expect(HttpResponseStatusCode::fromCode($code)->isServerError())->toBeFalse();
    }
    foreach (HttpResponseStatusCode::successCodes() as $code) {
        expect(HttpResponseStatusCode::fromCode($code)->isServerError())->toBeFalse();
    }
    foreach (HttpResponseStatusCode::redirectionCodes() as $code) {
        expect(HttpResponseStatusCode::fromCode($code)->isServerError())->toBeFalse();
    }
    foreach (HttpResponseStatusCode::clientErrorCodes() as $code) {
        expect(HttpResponseStatusCode::fromCode($code)->isServerError())->toBeFalse();
    }
    foreach (HttpResponseStatusCode::serverErrorCodes() as $code) {
        expect(HttpResponseStatusCode::fromCode($code)->isServerError())->toBeTrue();
    }
});

test('fromCode return correct http status code', function (): void {
    foreach (HttpResponseStatusCode::codes() as $code) {
        expect(HttpResponseStatusCode::fromCode($code)->value)->toBe($code);
    }
});

test('Correct status codes are returned', function (): void {
    expect(HttpResponseStatusCode::CONTINUE())->toBe(100);
    expect(HttpResponseStatusCode::SWITCHING_PROTOCOLS())->toBe(101);
    expect(HttpResponseStatusCode::PROCESSING())->toBe(102);
    expect(HttpResponseStatusCode::EARLY_HINTS())->toBe(103);
    expect(HttpResponseStatusCode::OK())->toBe(200);
    expect(HttpResponseStatusCode::CREATED())->toBe(201);
    expect(HttpResponseStatusCode::ACCEPTED())->toBe(202);
    expect(HttpResponseStatusCode::NON_AUTHORITATIVE_INFORMATION())->toBe(203);
    expect(HttpResponseStatusCode::NO_CONTENT())->toBe(204);
    expect(HttpResponseStatusCode::RESET_CONTENT())->toBe(205);
    expect(HttpResponseStatusCode::PARTIAL_CONTENT())->toBe(206);
    expect(HttpResponseStatusCode::MULTI_STATUS())->toBe(207);
    expect(HttpResponseStatusCode::ALREADY_REPORTED())->toBe(208);
    expect(HttpResponseStatusCode::IM_USED())->toBe(226);
    expect(HttpResponseStatusCode::MULTIPLE_CHOICES())->toBe(300);
    expect(HttpResponseStatusCode::MOVED_PERMANENTLY())->toBe(301);
    expect(HttpResponseStatusCode::FOUND())->toBe(302);
    expect(HttpResponseStatusCode::SEE_OTHER())->toBe(303);
    expect(HttpResponseStatusCode::NOT_MODIFIED())->toBe(304);
    expect(HttpResponseStatusCode::USE_PROXY())->toBe(305);
    expect(HttpResponseStatusCode::TEMPORARY_REDIRECT())->toBe(307);
    expect(HttpResponseStatusCode::PERMANENT_REDIRECT())->toBe(308);
    expect(HttpResponseStatusCode::BAD_REQUEST())->toBe(400);
    expect(HttpResponseStatusCode::UNAUTHORIZED())->toBe(401);
    expect(HttpResponseStatusCode::PAYMENT_REQUIRED())->toBe(402);
    expect(HttpResponseStatusCode::FORBIDDEN())->toBe(403);
    expect(HttpResponseStatusCode::NOT_FOUND())->toBe(404);
    expect(HttpResponseStatusCode::METHOD_NOT_ALLOWED())->toBe(405);
    expect(HttpResponseStatusCode::NOT_ACCEPTABLE())->toBe(406);
    expect(HttpResponseStatusCode::PROXY_AUTHENTICATION_REQUIRED())->toBe(407);
    expect(HttpResponseStatusCode::REQUEST_TIMEOUT())->toBe(408);
    expect(HttpResponseStatusCode::CONFLICT())->toBe(409);
    expect(HttpResponseStatusCode::GONE())->toBe(410);
    expect(HttpResponseStatusCode::LENGTH_REQUIRED())->toBe(411);
    expect(HttpResponseStatusCode::PRECONDITION_FAILED())->toBe(412);
    expect(HttpResponseStatusCode::PAYLOAD_TOO_LARGE())->toBe(413);
    expect(HttpResponseStatusCode::URI_TOO_LONG())->toBe(414);
    expect(HttpResponseStatusCode::UNSUPPORTED_MEDIA_TYPE())->toBe(415);
    expect(HttpResponseStatusCode::RANGE_NOT_SATISFIABLE())->toBe(416);
    expect(HttpResponseStatusCode::EXPECTATION_FAILED())->toBe(417);
    expect(HttpResponseStatusCode::IM_A_TEAPOT())->toBe(418);
    expect(HttpResponseStatusCode::MISDIRECTED_REQUEST())->toBe(421);
    expect(HttpResponseStatusCode::UNPROCESSABLE_ENTITY())->toBe(422);
    expect(HttpResponseStatusCode::LOCKED())->toBe(423);
    expect(HttpResponseStatusCode::FAILED_DEPENDENCY())->toBe(424);
    expect(HttpResponseStatusCode::TOO_EARLY())->toBe(425);
    expect(HttpResponseStatusCode::UPGRADE_REQUIRED())->toBe(426);
    expect(HttpResponseStatusCode::PRECONDITION_REQUIRED())->toBe(428);
    expect(HttpResponseStatusCode::TOO_MANY_REQUESTS())->toBe(429);
    expect(HttpResponseStatusCode::REQUEST_HEADER_FIELDS_TOO_LARGE())->toBe(431);
    expect(HttpResponseStatusCode::UNAVAILABLE_FOR_LEGAL_REASONS())->toBe(451);
    expect(HttpResponseStatusCode::INTERNAL_SERVER_ERROR())->toBe(500);
    expect(HttpResponseStatusCode::NOT_IMPLEMENTED())->toBe(501);
    expect(HttpResponseStatusCode::BAD_GATEWAY())->toBe(502);
    expect(HttpResponseStatusCode::SERVICE_UNAVAILABLE())->toBe(503);
    expect(HttpResponseStatusCode::GATEWAY_TIMEOUT())->toBe(504);
    expect(HttpResponseStatusCode::HTTP_VERSION_NOT_SUPPORTED())->toBe(505);
    expect(HttpResponseStatusCode::VARIANT_ALSO_NEGOTIATES())->toBe(506);
    expect(HttpResponseStatusCode::INSUFFICIENT_STORAGE())->toBe(507);
    expect(HttpResponseStatusCode::LOOP_DETECTED())->toBe(508);
    expect(HttpResponseStatusCode::NOT_EXTENDED())->toBe(510);
    expect(HttpResponseStatusCode::NETWORK_AUTHENTICATION_REQUIRED())->toBe(511);
});
