{
    "_readme": [
        "This file locks the dependencies of your project to a known state",
        "Read more about it at https://getcomposer.org/doc/01-basic-usage.md#installing-dependencies",
        "This file is @generated automatically"
    ],
    "content-hash": "da1776875a4d18ca592838d2bf1c5fca",
    "packages": [{
            "name": "asm89/stack-cors",
            "version": "v2.0.1",
            "source": {
                "type": "git",
                "url": "https://github.com/asm89/stack-cors.git",
                "reference": "23f469e81c65e2fb7fc7bce371fbdc363fe32adf"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/asm89/stack-cors/zipball/23f469e81c65e2fb7fc7bce371fbdc363fe32adf",
                "reference": "23f469e81c65e2fb7fc7bce371fbdc363fe32adf",
                "shasum": ""
            },
            "require": {
                "php": "^7.0",
                "symfony/http-foundation": "~2.7|~3.0|~4.0|~5.0",
                "symfony/http-kernel": "~2.7|~3.0|~4.0|~5.0"
            },
            "require-dev": {
                "phpunit/phpunit": "^6|^7|^8|^9",
                "squizlabs/php_codesniffer": "^3.5"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.0-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Asm89\\Stack\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                "name": "Alexander",
                "email": "iam.asm89@gmail.com"
            }],
            "description": "Cross-origin resource sharing library and stack middleware",
            "homepage": "https://github.com/asm89/stack-cors",
            "keywords": [
                "cors",
                "stack"
            ],
            "time": "2020-05-31T07:17:05+00:00"
        },
        {
            "name": "brick/math",
            "version": "0.8.15",
            "source": {
                "type": "git",
                "url": "https://github.com/brick/math.git",
                "reference": "9b08d412b9da9455b210459ff71414de7e6241cd"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/brick/math/zipball/9b08d412b9da9455b210459ff71414de7e6241cd",
                "reference": "9b08d412b9da9455b210459ff71414de7e6241cd",
                "shasum": ""
            },
            "require": {
                "ext-json": "*",
                "php": "^7.1|^8.0"
            },
            "require-dev": {
                "php-coveralls/php-coveralls": "^2.2",
                "phpunit/phpunit": "^7.5.15|^8.5",
                "vimeo/psalm": "^3.5"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Brick\\Math\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "description": "Arbitrary-precision arithmetic library",
            "keywords": [
                "Arbitrary-precision",
                "BigInteger",
                "BigRational",
                "arithmetic",
                "bigdecimal",
                "bignum",
                "brick",
                "math"
            ],
            "funding": [{
                "url": "https://tidelift.com/funding/github/packagist/brick/math",
                "type": "tidelift"
            }],
            "time": "2020-04-15T15:59:35+00:00"
        },
        {
            "name": "dnoegel/php-xdg-base-dir",
            "version": "v0.1.1",
            "source": {
                "type": "git",
                "url": "https://github.com/dnoegel/php-xdg-base-dir.git",
                "reference": "8f8a6e48c5ecb0f991c2fdcf5f154a47d85f9ffd"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/dnoegel/php-xdg-base-dir/zipball/8f8a6e48c5ecb0f991c2fdcf5f154a47d85f9ffd",
                "reference": "8f8a6e48c5ecb0f991c2fdcf5f154a47d85f9ffd",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.2"
            },
            "require-dev": {
                "phpunit/phpunit": "~7.0|~6.0|~5.0|~4.8.35"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "XdgBaseDir\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "description": "implementation of xdg base directory specification for php",
            "time": "2019-12-04T15:06:13+00:00"
        },
        {
            "name": "doctrine/inflector",
            "version": "2.0.3",
            "source": {
                "type": "git",
                "url": "https://github.com/doctrine/inflector.git",
                "reference": "9cf661f4eb38f7c881cac67c75ea9b00bf97b210"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/doctrine/inflector/zipball/9cf661f4eb38f7c881cac67c75ea9b00bf97b210",
                "reference": "9cf661f4eb38f7c881cac67c75ea9b00bf97b210",
                "shasum": ""
            },
            "require": {
                "php": "^7.2 || ^8.0"
            },
            "require-dev": {
                "doctrine/coding-standard": "^7.0",
                "phpstan/phpstan": "^0.11",
                "phpstan/phpstan-phpunit": "^0.11",
                "phpstan/phpstan-strict-rules": "^0.11",
                "phpunit/phpunit": "^7.0 || ^8.0 || ^9.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.0.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Doctrine\\Inflector\\": "lib/Doctrine/Inflector"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                    "name": "Guilherme Blanco",
                    "email": "guilhermeblanco@gmail.com"
                },
                {
                    "name": "Roman Borschel",
                    "email": "roman@code-factory.org"
                },
                {
                    "name": "Benjamin Eberlei",
                    "email": "kontakt@beberlei.de"
                },
                {
                    "name": "Jonathan Wage",
                    "email": "jonwage@gmail.com"
                },
                {
                    "name": "Johannes Schmitt",
                    "email": "schmittjoh@gmail.com"
                }
            ],
            "description": "PHP Doctrine Inflector is a small library that can perform string manipulations with regard to upper/lowercase and singular/plural forms of words.",
            "homepage": "https://www.doctrine-project.org/projects/inflector.html",
            "keywords": [
                "inflection",
                "inflector",
                "lowercase",
                "manipulation",
                "php",
                "plural",
                "singular",
                "strings",
                "uppercase",
                "words"
            ],
            "funding": [{
                    "url": "https://www.doctrine-project.org/sponsorship.html",
                    "type": "custom"
                },
                {
                    "url": "https://www.patreon.com/phpdoctrine",
                    "type": "patreon"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/doctrine%2Finflector",
                    "type": "tidelift"
                }
            ],
            "time": "2020-05-29T15:13:26+00:00"
        },
        {
            "name": "doctrine/lexer",
            "version": "1.2.1",
            "source": {
                "type": "git",
                "url": "https://github.com/doctrine/lexer.git",
                "reference": "e864bbf5904cb8f5bb334f99209b48018522f042"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/doctrine/lexer/zipball/e864bbf5904cb8f5bb334f99209b48018522f042",
                "reference": "e864bbf5904cb8f5bb334f99209b48018522f042",
                "shasum": ""
            },
            "require": {
                "php": "^7.2 || ^8.0"
            },
            "require-dev": {
                "doctrine/coding-standard": "^6.0",
                "phpstan/phpstan": "^0.11.8",
                "phpunit/phpunit": "^8.2"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.2.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Doctrine\\Common\\Lexer\\": "lib/Doctrine/Common/Lexer"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                    "name": "Guilherme Blanco",
                    "email": "guilhermeblanco@gmail.com"
                },
                {
                    "name": "Roman Borschel",
                    "email": "roman@code-factory.org"
                },
                {
                    "name": "Johannes Schmitt",
                    "email": "schmittjoh@gmail.com"
                }
            ],
            "description": "PHP Doctrine Lexer parser library that can be used in Top-Down, Recursive Descent Parsers.",
            "homepage": "https://www.doctrine-project.org/projects/lexer.html",
            "keywords": [
                "annotations",
                "docblock",
                "lexer",
                "parser",
                "php"
            ],
            "funding": [{
                    "url": "https://www.doctrine-project.org/sponsorship.html",
                    "type": "custom"
                },
                {
                    "url": "https://www.patreon.com/phpdoctrine",
                    "type": "patreon"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/doctrine%2Flexer",
                    "type": "tidelift"
                }
            ],
            "time": "2020-05-25T17:44:05+00:00"
        },
        {
            "name": "dragonmantank/cron-expression",
            "version": "v2.3.0",
            "source": {
                "type": "git",
                "url": "https://github.com/dragonmantank/cron-expression.git",
                "reference": "72b6fbf76adb3cf5bc0db68559b33d41219aba27"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/dragonmantank/cron-expression/zipball/72b6fbf76adb3cf5bc0db68559b33d41219aba27",
                "reference": "72b6fbf76adb3cf5bc0db68559b33d41219aba27",
                "shasum": ""
            },
            "require": {
                "php": "^7.0"
            },
            "require-dev": {
                "phpunit/phpunit": "^6.4|^7.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.3-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Cron\\": "src/Cron/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                    "name": "Michael Dowling",
                    "email": "mtdowling@gmail.com",
                    "homepage": "https://github.com/mtdowling"
                },
                {
                    "name": "Chris Tankersley",
                    "email": "chris@ctankersley.com",
                    "homepage": "https://github.com/dragonmantank"
                }
            ],
            "description": "CRON for PHP: Calculate the next or previous run date and determine if a CRON expression is due",
            "keywords": [
                "cron",
                "schedule"
            ],
            "time": "2019-03-31T00:38:28+00:00"
        },
        {
            "name": "egulias/email-validator",
            "version": "2.1.18",
            "source": {
                "type": "git",
                "url": "https://github.com/egulias/EmailValidator.git",
                "reference": "cfa3d44471c7f5bfb684ac2b0da7114283d78441"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/egulias/EmailValidator/zipball/cfa3d44471c7f5bfb684ac2b0da7114283d78441",
                "reference": "cfa3d44471c7f5bfb684ac2b0da7114283d78441",
                "shasum": ""
            },
            "require": {
                "doctrine/lexer": "^1.0.1",
                "php": ">=5.5",
                "symfony/polyfill-intl-idn": "^1.10"
            },
            "require-dev": {
                "dominicsayers/isemail": "^3.0.7",
                "phpunit/phpunit": "^4.8.36|^7.5.15",
                "satooshi/php-coveralls": "^1.0.1"
            },
            "suggest": {
                "ext-intl": "PHP Internationalization Libraries are required to use the SpoofChecking validation"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.1.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Egulias\\EmailValidator\\": "src"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                "name": "Eduardo Gulias Davis"
            }],
            "description": "A library for validating emails against several RFCs",
            "homepage": "https://github.com/egulias/EmailValidator",
            "keywords": [
                "email",
                "emailvalidation",
                "emailvalidator",
                "validation",
                "validator"
            ],
            "time": "2020-06-16T20:11:17+00:00"
        },
        {
            "name": "fideloper/proxy",
            "version": "4.4.0",
            "source": {
                "type": "git",
                "url": "https://github.com/fideloper/TrustedProxy.git",
                "reference": "9beebf48a1c344ed67c1d36bb1b8709db7c3c1a8"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/fideloper/TrustedProxy/zipball/9beebf48a1c344ed67c1d36bb1b8709db7c3c1a8",
                "reference": "9beebf48a1c344ed67c1d36bb1b8709db7c3c1a8",
                "shasum": ""
            },
            "require": {
                "illuminate/contracts": "^5.0|^6.0|^7.0|^8.0",
                "php": ">=5.4.0"
            },
            "require-dev": {
                "illuminate/http": "^5.0|^6.0|^7.0|^8.0",
                "mockery/mockery": "^1.0",
                "phpunit/phpunit": "^6.0"
            },
            "type": "library",
            "extra": {
                "laravel": {
                    "providers": [
                        "Fideloper\\Proxy\\TrustedProxyServiceProvider"
                    ]
                }
            },
            "autoload": {
                "psr-4": {
                    "Fideloper\\Proxy\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                "name": "Chris Fidao",
                "email": "fideloper@gmail.com"
            }],
            "description": "Set trusted proxies for Laravel",
            "keywords": [
                "load balancing",
                "proxy",
                "trusted proxy"
            ],
            "time": "2020-06-23T01:36:47+00:00"
        },
        {
            "name": "fruitcake/laravel-cors",
            "version": "v2.0.1",
            "source": {
                "type": "git",
                "url": "https://github.com/fruitcake/laravel-cors.git",
                "reference": "dbfc311b25d4873c3c2382b26860be3567492bd6"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/fruitcake/laravel-cors/zipball/dbfc311b25d4873c3c2382b26860be3567492bd6",
                "reference": "dbfc311b25d4873c3c2382b26860be3567492bd6",
                "shasum": ""
            },
            "require": {
                "asm89/stack-cors": "^2.0.1",
                "illuminate/contracts": "^5.6|^6.0|^7.0|^8.0",
                "illuminate/support": "^5.6|^6.0|^7.0|^8.0",
                "php": ">=7.1",
                "symfony/http-foundation": "^4.0|^5.0",
                "symfony/http-kernel": "^4.0|^5.0"
            },
            "require-dev": {
                "laravel/framework": "^5.5|^6.0|^7.0|^8.0",
                "orchestra/dusk-updater": "^1.2",
                "orchestra/testbench": "^3.5|^4.0|^5.0|^6.0",
                "orchestra/testbench-dusk": "^5.1",
                "phpro/grumphp": "^0.16|^0.17",
                "phpunit/phpunit": "^6.0|^7.0|^8.0",
                "squizlabs/php_codesniffer": "^3.5"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.0-dev"
                },
                "laravel": {
                    "providers": [
                        "Fruitcake\\Cors\\CorsServiceProvider"
                    ]
                }
            },
            "autoload": {
                "psr-4": {
                    "Fruitcake\\Cors\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                    "name": "Fruitcake",
                    "homepage": "https://fruitcake.nl"
                },
                {
                    "name": "Barry vd. Heuvel",
                    "email": "barryvdh@gmail.com"
                }
            ],
            "description": "Adds CORS (Cross-Origin Resource Sharing) headers support in your Laravel application",
            "keywords": [
                "api",
                "cors",
                "crossdomain",
                "laravel"
            ],
            "funding": [{
                "url": "https://github.com/barryvdh",
                "type": "github"
            }],
            "time": "2020-05-31T07:30:16+00:00"
        },
        {
            "name": "guzzlehttp/guzzle",
            "version": "6.5.5",
            "source": {
                "type": "git",
                "url": "https://github.com/guzzle/guzzle.git",
                "reference": "9d4290de1cfd701f38099ef7e183b64b4b7b0c5e"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/guzzle/guzzle/zipball/9d4290de1cfd701f38099ef7e183b64b4b7b0c5e",
                "reference": "9d4290de1cfd701f38099ef7e183b64b4b7b0c5e",
                "shasum": ""
            },
            "require": {
                "ext-json": "*",
                "guzzlehttp/promises": "^1.0",
                "guzzlehttp/psr7": "^1.6.1",
                "php": ">=5.5",
                "symfony/polyfill-intl-idn": "^1.17.0"
            },
            "require-dev": {
                "ext-curl": "*",
                "phpunit/phpunit": "^4.8.35 || ^5.7 || ^6.4 || ^7.0",
                "psr/log": "^1.1"
            },
            "suggest": {
                "psr/log": "Required for using the Log middleware"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "6.5-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "GuzzleHttp\\": "src/"
                },
                "files": [
                    "src/functions_include.php"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                "name": "Michael Dowling",
                "email": "mtdowling@gmail.com",
                "homepage": "https://github.com/mtdowling"
            }],
            "description": "Guzzle is a PHP HTTP client library",
            "homepage": "http://guzzlephp.org/",
            "keywords": [
                "client",
                "curl",
                "framework",
                "http",
                "http client",
                "rest",
                "web service"
            ],
            "time": "2020-06-16T21:01:06+00:00"
        },
        {
            "name": "guzzlehttp/promises",
            "version": "v1.3.1",
            "source": {
                "type": "git",
                "url": "https://github.com/guzzle/promises.git",
                "reference": "a59da6cf61d80060647ff4d3eb2c03a2bc694646"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/guzzle/promises/zipball/a59da6cf61d80060647ff4d3eb2c03a2bc694646",
                "reference": "a59da6cf61d80060647ff4d3eb2c03a2bc694646",
                "shasum": ""
            },
            "require": {
                "php": ">=5.5.0"
            },
            "require-dev": {
                "phpunit/phpunit": "^4.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.4-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "GuzzleHttp\\Promise\\": "src/"
                },
                "files": [
                    "src/functions_include.php"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                "name": "Michael Dowling",
                "email": "mtdowling@gmail.com",
                "homepage": "https://github.com/mtdowling"
            }],
            "description": "Guzzle promises library",
            "keywords": [
                "promise"
            ],
            "time": "2016-12-20T10:07:11+00:00"
        },
        {
            "name": "guzzlehttp/psr7",
            "version": "1.6.1",
            "source": {
                "type": "git",
                "url": "https://github.com/guzzle/psr7.git",
                "reference": "239400de7a173fe9901b9ac7c06497751f00727a"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/guzzle/psr7/zipball/239400de7a173fe9901b9ac7c06497751f00727a",
                "reference": "239400de7a173fe9901b9ac7c06497751f00727a",
                "shasum": ""
            },
            "require": {
                "php": ">=5.4.0",
                "psr/http-message": "~1.0",
                "ralouphie/getallheaders": "^2.0.5 || ^3.0.0"
            },
            "provide": {
                "psr/http-message-implementation": "1.0"
            },
            "require-dev": {
                "ext-zlib": "*",
                "phpunit/phpunit": "~4.8.36 || ^5.7.27 || ^6.5.8"
            },
            "suggest": {
                "zendframework/zend-httphandlerrunner": "Emit PSR-7 responses"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.6-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "GuzzleHttp\\Psr7\\": "src/"
                },
                "files": [
                    "src/functions_include.php"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                    "name": "Michael Dowling",
                    "email": "mtdowling@gmail.com",
                    "homepage": "https://github.com/mtdowling"
                },
                {
                    "name": "Tobias Schultze",
                    "homepage": "https://github.com/Tobion"
                }
            ],
            "description": "PSR-7 message implementation that also provides common utility methods",
            "keywords": [
                "http",
                "message",
                "psr-7",
                "request",
                "response",
                "stream",
                "uri",
                "url"
            ],
            "time": "2019-07-01T23:21:34+00:00"
        },
        {
            "name": "laravel/framework",
            "version": "v7.17.1",
            "source": {
                "type": "git",
                "url": "https://github.com/laravel/framework.git",
                "reference": "6633c4017b311d3aaae842edabd567c637afc39c"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/laravel/framework/zipball/6633c4017b311d3aaae842edabd567c637afc39c",
                "reference": "6633c4017b311d3aaae842edabd567c637afc39c",
                "shasum": ""
            },
            "require": {
                "doctrine/inflector": "^1.4|^2.0",
                "dragonmantank/cron-expression": "^2.0",
                "egulias/email-validator": "^2.1.10",
                "ext-json": "*",
                "ext-mbstring": "*",
                "ext-openssl": "*",
                "league/commonmark": "^1.3",
                "league/flysystem": "^1.0.34",
                "monolog/monolog": "^2.0",
                "nesbot/carbon": "^2.17",
                "opis/closure": "^3.1",
                "php": "^7.2.5",
                "psr/container": "^1.0",
                "psr/simple-cache": "^1.0",
                "ramsey/uuid": "^3.7|^4.0",
                "swiftmailer/swiftmailer": "^6.0",
                "symfony/console": "^5.0",
                "symfony/error-handler": "^5.0",
                "symfony/finder": "^5.0",
                "symfony/http-foundation": "^5.0",
                "symfony/http-kernel": "^5.0",
                "symfony/mime": "^5.0",
                "symfony/polyfill-php73": "^1.17",
                "symfony/process": "^5.0",
                "symfony/routing": "^5.0",
                "symfony/var-dumper": "^5.0",
                "tijsverkoyen/css-to-inline-styles": "^2.2.2",
                "vlucas/phpdotenv": "^4.0",
                "voku/portable-ascii": "^1.4.8"
            },
            "conflict": {
                "tightenco/collect": "<5.5.33"
            },
            "provide": {
                "psr/container-implementation": "1.0"
            },
            "replace": {
                "illuminate/auth": "self.version",
                "illuminate/broadcasting": "self.version",
                "illuminate/bus": "self.version",
                "illuminate/cache": "self.version",
                "illuminate/config": "self.version",
                "illuminate/console": "self.version",
                "illuminate/container": "self.version",
                "illuminate/contracts": "self.version",
                "illuminate/cookie": "self.version",
                "illuminate/database": "self.version",
                "illuminate/encryption": "self.version",
                "illuminate/events": "self.version",
                "illuminate/filesystem": "self.version",
                "illuminate/hashing": "self.version",
                "illuminate/http": "self.version",
                "illuminate/log": "self.version",
                "illuminate/mail": "self.version",
                "illuminate/notifications": "self.version",
                "illuminate/pagination": "self.version",
                "illuminate/pipeline": "self.version",
                "illuminate/queue": "self.version",
                "illuminate/redis": "self.version",
                "illuminate/routing": "self.version",
                "illuminate/session": "self.version",
                "illuminate/support": "self.version",
                "illuminate/testing": "self.version",
                "illuminate/translation": "self.version",
                "illuminate/validation": "self.version",
                "illuminate/view": "self.version"
            },
            "require-dev": {
                "aws/aws-sdk-php": "^3.0",
                "doctrine/dbal": "^2.6",
                "filp/whoops": "^2.4",
                "guzzlehttp/guzzle": "^6.3.1|^7.0",
                "league/flysystem-cached-adapter": "^1.0",
                "mockery/mockery": "^1.3.1",
                "moontoast/math": "^1.1",
                "orchestra/testbench-core": "^5.0",
                "pda/pheanstalk": "^4.0",
                "phpunit/phpunit": "^8.4|^9.0",
                "predis/predis": "^1.1.1",
                "symfony/cache": "^5.0"
            },
            "suggest": {
                "aws/aws-sdk-php": "Required to use the SQS queue driver, DynamoDb failed job storage and SES mail driver (^3.0).",
                "doctrine/dbal": "Required to rename columns and drop SQLite columns (^2.6).",
                "ext-ftp": "Required to use the Flysystem FTP driver.",
                "ext-gd": "Required to use Illuminate\\Http\\Testing\\FileFactory::image().",
                "ext-memcached": "Required to use the memcache cache driver.",
                "ext-pcntl": "Required to use all features of the queue worker.",
                "ext-posix": "Required to use all features of the queue worker.",
                "ext-redis": "Required to use the Redis cache and queue drivers (^4.0|^5.0).",
                "filp/whoops": "Required for friendly error pages in development (^2.4).",
                "fzaninotto/faker": "Required to use the eloquent factory builder (^1.9.1).",
                "guzzlehttp/guzzle": "Required to use the HTTP Client, Mailgun mail driver and the ping methods on schedules (^6.3.1|^7.0).",
                "laravel/tinker": "Required to use the tinker console command (^2.0).",
                "league/flysystem-aws-s3-v3": "Required to use the Flysystem S3 driver (^1.0).",
                "league/flysystem-cached-adapter": "Required to use the Flysystem cache (^1.0).",
                "league/flysystem-sftp": "Required to use the Flysystem SFTP driver (^1.0).",
                "mockery/mockery": "Required to use mocking (^1.3.1).",
                "moontoast/math": "Required to use ordered UUIDs (^1.1).",
                "nyholm/psr7": "Required to use PSR-7 bridging features (^1.2).",
                "pda/pheanstalk": "Required to use the beanstalk queue driver (^4.0).",
                "phpunit/phpunit": "Required to use assertions and run tests (^8.4|^9.0).",
                "psr/http-message": "Required to allow Storage::put to accept a StreamInterface (^1.0).",
                "pusher/pusher-php-server": "Required to use the Pusher broadcast driver (^4.0).",
                "symfony/cache": "Required to PSR-6 cache bridge (^5.0).",
                "symfony/filesystem": "Required to create relative storage directory symbolic links (^5.0).",
                "symfony/psr-http-message-bridge": "Required to use PSR-7 bridging features (^2.0).",
                "wildbit/swiftmailer-postmark": "Required to use Postmark mail driver (^3.0)."
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "7.x-dev"
                }
            },
            "autoload": {
                "files": [
                    "src/Illuminate/Foundation/helpers.php",
                    "src/Illuminate/Support/helpers.php"
                ],
                "psr-4": {
                    "Illuminate\\": "src/Illuminate/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                "name": "Taylor Otwell",
                "email": "taylor@laravel.com"
            }],
            "description": "The Laravel Framework.",
            "homepage": "https://laravel.com",
            "keywords": [
                "framework",
                "laravel"
            ],
            "time": "2020-06-23T15:22:07+00:00"
        },
        {
            "name": "laravel/socialite",
            "version": "v4.4.1",
            "source": {
                "type": "git",
                "url": "https://github.com/laravel/socialite.git",
                "reference": "80951df0d93435b773aa00efe1fad6d5015fac75"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/laravel/socialite/zipball/80951df0d93435b773aa00efe1fad6d5015fac75",
                "reference": "80951df0d93435b773aa00efe1fad6d5015fac75",
                "shasum": ""
            },
            "require": {
                "ext-json": "*",
                "guzzlehttp/guzzle": "^6.0|^7.0",
                "illuminate/http": "~5.7.0|~5.8.0|^6.0|^7.0",
                "illuminate/support": "~5.7.0|~5.8.0|^6.0|^7.0",
                "league/oauth1-client": "^1.0",
                "php": "^7.1.3"
            },
            "require-dev": {
                "illuminate/contracts": "~5.7.0|~5.8.0|^6.0|^7.0",
                "mockery/mockery": "^1.0",
                "orchestra/testbench": "^3.7|^3.8|^4.0|^5.0",
                "phpunit/phpunit": "^7.0|^8.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "4.x-dev"
                },
                "laravel": {
                    "providers": [
                        "Laravel\\Socialite\\SocialiteServiceProvider"
                    ],
                    "aliases": {
                        "Socialite": "Laravel\\Socialite\\Facades\\Socialite"
                    }
                }
            },
            "autoload": {
                "psr-4": {
                    "Laravel\\Socialite\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                "name": "Taylor Otwell",
                "email": "taylor@laravel.com"
            }],
            "description": "Laravel wrapper around OAuth 1 & OAuth 2 libraries.",
            "homepage": "https://laravel.com",
            "keywords": [
                "laravel",
                "oauth"
            ],
            "time": "2020-06-03T13:30:03+00:00"
        },
        {
            "name": "laravel/tinker",
            "version": "v2.4.0",
            "source": {
                "type": "git",
                "url": "https://github.com/laravel/tinker.git",
                "reference": "cde90a7335a2130a4488beb68f4b2141869241db"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/laravel/tinker/zipball/cde90a7335a2130a4488beb68f4b2141869241db",
                "reference": "cde90a7335a2130a4488beb68f4b2141869241db",
                "shasum": ""
            },
            "require": {
                "illuminate/console": "^6.0|^7.0|^8.0",
                "illuminate/contracts": "^6.0|^7.0|^8.0",
                "illuminate/support": "^6.0|^7.0|^8.0",
                "php": "^7.2",
                "psy/psysh": "^0.10.3",
                "symfony/var-dumper": "^4.3|^5.0"
            },
            "require-dev": {
                "mockery/mockery": "^1.3.1",
                "phpunit/phpunit": "^8.4|^9.0"
            },
            "suggest": {
                "illuminate/database": "The Illuminate Database package (^6.0|^7.0|^8.0)."
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.x-dev"
                },
                "laravel": {
                    "providers": [
                        "Laravel\\Tinker\\TinkerServiceProvider"
                    ]
                }
            },
            "autoload": {
                "psr-4": {
                    "Laravel\\Tinker\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                "name": "Taylor Otwell",
                "email": "taylor@laravel.com"
            }],
            "description": "Powerful REPL for the Laravel framework.",
            "keywords": [
                "REPL",
                "Tinker",
                "laravel",
                "psysh"
            ],
            "time": "2020-04-07T15:01:31+00:00"
        },
        {
            "name": "laravel/ui",
            "version": "v2.0.3",
            "source": {
                "type": "git",
                "url": "https://github.com/laravel/ui.git",
                "reference": "15368c5328efb7ce94f35ca750acde9b496ab1b1"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/laravel/ui/zipball/15368c5328efb7ce94f35ca750acde9b496ab1b1",
                "reference": "15368c5328efb7ce94f35ca750acde9b496ab1b1",
                "shasum": ""
            },
            "require": {
                "illuminate/console": "^7.0",
                "illuminate/filesystem": "^7.0",
                "illuminate/support": "^7.0",
                "php": "^7.2.5"
            },
            "require-dev": {
                "mockery/mockery": "^1.0",
                "phpunit/phpunit": "^8.0"
            },
            "type": "library",
            "extra": {
                "laravel": {
                    "providers": [
                        "Laravel\\Ui\\UiServiceProvider"
                    ]
                }
            },
            "autoload": {
                "psr-4": {
                    "Laravel\\Ui\\": "src/",
                    "Illuminate\\Foundation\\Auth\\": "auth-backend/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                "name": "Taylor Otwell",
                "email": "taylor@laravel.com"
            }],
            "description": "Laravel UI utilities and presets.",
            "keywords": [
                "laravel",
                "ui"
            ],
            "time": "2020-04-29T15:06:45+00:00"
        },
        {
            "name": "league/commonmark",
            "version": "1.5.0",
            "source": {
                "type": "git",
                "url": "https://github.com/thephpleague/commonmark.git",
                "reference": "fc33ca12575e98e57cdce7d5f38b2ca5335714b3"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/thephpleague/commonmark/zipball/fc33ca12575e98e57cdce7d5f38b2ca5335714b3",
                "reference": "fc33ca12575e98e57cdce7d5f38b2ca5335714b3",
                "shasum": ""
            },
            "require": {
                "ext-mbstring": "*",
                "php": "^7.1 || ^8.0"
            },
            "conflict": {
                "scrutinizer/ocular": "1.7.*"
            },
            "require-dev": {
                "cebe/markdown": "~1.0",
                "commonmark/commonmark.js": "0.29.1",
                "erusev/parsedown": "~1.0",
                "ext-json": "*",
                "github/gfm": "0.29.0",
                "michelf/php-markdown": "~1.4",
                "mikehaertl/php-shellcommand": "^1.4",
                "phpstan/phpstan": "^0.12",
                "phpunit/phpunit": "^7.5",
                "scrutinizer/ocular": "^1.5",
                "symfony/finder": "^4.2"
            },
            "bin": [
                "bin/commonmark"
            ],
            "type": "library",
            "autoload": {
                "psr-4": {
                    "League\\CommonMark\\": "src"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [{
                "name": "Colin O'Dell",
                "email": "colinodell@gmail.com",
                "homepage": "https://www.colinodell.com",
                "role": "Lead Developer"
            }],
            "description": "Highly-extensible PHP Markdown parser which fully supports the CommonMark spec and Github-Flavored Markdown (GFM)",
            "homepage": "https://commonmark.thephpleague.com",
            "keywords": [
                "commonmark",
                "flavored",
                "gfm",
                "github",
                "github-flavored",
                "markdown",
                "md",
                "parser"
            ],
            "funding": [{
                    "url": "https://enjoy.gitstore.app/repositories/thephpleague/commonmark",
                    "type": "custom"
                },
                {
                    "url": "https://www.colinodell.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://www.paypal.me/colinpodell/10.00",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/colinodell",
                    "type": "github"
                },
                {
                    "url": "https://www.patreon.com/colinodell",
                    "type": "patreon"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/league/commonmark",
                    "type": "tidelift"
                }
            ],
            "time": "2020-06-21T20:50:13+00:00"
        },
        {
            "name": "league/flysystem",
            "version": "1.0.69",
            "source": {
                "type": "git",
                "url": "https://github.com/thephpleague/flysystem.git",
                "reference": "7106f78428a344bc4f643c233a94e48795f10967"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/thephpleague/flysystem/zipball/7106f78428a344bc4f643c233a94e48795f10967",
                "reference": "7106f78428a344bc4f643c233a94e48795f10967",
                "shasum": ""
            },
            "require": {
                "ext-fileinfo": "*",
                "php": ">=5.5.9"
            },
            "conflict": {
                "league/flysystem-sftp": "<1.0.6"
            },
            "require-dev": {
                "phpspec/phpspec": "^3.4",
                "phpunit/phpunit": "^5.7.26"
            },
            "suggest": {
                "ext-fileinfo": "Required for MimeType",
                "ext-ftp": "Allows you to use FTP server storage",
                "ext-openssl": "Allows you to use FTPS server storage",
                "league/flysystem-aws-s3-v2": "Allows you to use S3 storage with AWS SDK v2",
                "league/flysystem-aws-s3-v3": "Allows you to use S3 storage with AWS SDK v3",
                "league/flysystem-azure": "Allows you to use Windows Azure Blob storage",
                "league/flysystem-cached-adapter": "Flysystem adapter decorator for metadata caching",
                "league/flysystem-eventable-filesystem": "Allows you to use EventableFilesystem",
                "league/flysystem-rackspace": "Allows you to use Rackspace Cloud Files",
                "league/flysystem-sftp": "Allows you to use SFTP server storage via phpseclib",
                "league/flysystem-webdav": "Allows you to use WebDAV storage",
                "league/flysystem-ziparchive": "Allows you to use ZipArchive adapter",
                "spatie/flysystem-dropbox": "Allows you to use Dropbox storage",
                "srmklive/flysystem-dropbox-v2": "Allows you to use Dropbox storage for PHP 5 applications"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.1-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "League\\Flysystem\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                "name": "Frank de Jonge",
                "email": "info@frenky.net"
            }],
            "description": "Filesystem abstraction: Many filesystems, one API.",
            "keywords": [
                "Cloud Files",
                "WebDAV",
                "abstraction",
                "aws",
                "cloud",
                "copy.com",
                "dropbox",
                "file systems",
                "files",
                "filesystem",
                "filesystems",
                "ftp",
                "rackspace",
                "remote",
                "s3",
                "sftp",
                "storage"
            ],
            "funding": [{
                "url": "https://offset.earth/frankdejonge",
                "type": "other"
            }],
            "time": "2020-05-18T15:13:39+00:00"
        },
        {
            "name": "league/oauth1-client",
            "version": "1.7.0",
            "source": {
                "type": "git",
                "url": "https://github.com/thephpleague/oauth1-client.git",
                "reference": "fca5f160650cb74d23fc11aa570dd61f86dcf647"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/thephpleague/oauth1-client/zipball/fca5f160650cb74d23fc11aa570dd61f86dcf647",
                "reference": "fca5f160650cb74d23fc11aa570dd61f86dcf647",
                "shasum": ""
            },
            "require": {
                "guzzlehttp/guzzle": "^6.0",
                "php": ">=5.5.0"
            },
            "require-dev": {
                "mockery/mockery": "^0.9",
                "phpunit/phpunit": "^4.0",
                "squizlabs/php_codesniffer": "^2.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.0-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "League\\OAuth1\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                "name": "Ben Corlett",
                "email": "bencorlett@me.com",
                "homepage": "http://www.webcomm.com.au",
                "role": "Developer"
            }],
            "description": "OAuth 1.0 Client Library",
            "keywords": [
                "Authentication",
                "SSO",
                "authorization",
                "bitbucket",
                "identity",
                "idp",
                "oauth",
                "oauth1",
                "single sign on",
                "trello",
                "tumblr",
                "twitter"
            ],
            "time": "2016-08-17T00:36:58+00:00"
        },
        {
            "name": "monolog/monolog",
            "version": "2.1.0",
            "source": {
                "type": "git",
                "url": "https://github.com/Seldaek/monolog.git",
                "reference": "38914429aac460e8e4616c8cb486ecb40ec90bb1"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/Seldaek/monolog/zipball/38914429aac460e8e4616c8cb486ecb40ec90bb1",
                "reference": "38914429aac460e8e4616c8cb486ecb40ec90bb1",
                "shasum": ""
            },
            "require": {
                "php": ">=7.2",
                "psr/log": "^1.0.1"
            },
            "provide": {
                "psr/log-implementation": "1.0.0"
            },
            "require-dev": {
                "aws/aws-sdk-php": "^2.4.9 || ^3.0",
                "doctrine/couchdb": "~1.0@dev",
                "elasticsearch/elasticsearch": "^6.0",
                "graylog2/gelf-php": "^1.4.2",
                "php-amqplib/php-amqplib": "~2.4",
                "php-console/php-console": "^3.1.3",
                "php-parallel-lint/php-parallel-lint": "^1.0",
                "phpspec/prophecy": "^1.6.1",
                "phpunit/phpunit": "^8.5",
                "predis/predis": "^1.1",
                "rollbar/rollbar": "^1.3",
                "ruflin/elastica": ">=0.90 <3.0",
                "swiftmailer/swiftmailer": "^5.3|^6.0"
            },
            "suggest": {
                "aws/aws-sdk-php": "Allow sending log messages to AWS services like DynamoDB",
                "doctrine/couchdb": "Allow sending log messages to a CouchDB server",
                "elasticsearch/elasticsearch": "Allow sending log messages to an Elasticsearch server via official client",
                "ext-amqp": "Allow sending log messages to an AMQP server (1.0+ required)",
                "ext-mbstring": "Allow to work properly with unicode symbols",
                "ext-mongodb": "Allow sending log messages to a MongoDB server (via driver)",
                "graylog2/gelf-php": "Allow sending log messages to a GrayLog2 server",
                "mongodb/mongodb": "Allow sending log messages to a MongoDB server (via library)",
                "php-amqplib/php-amqplib": "Allow sending log messages to an AMQP server using php-amqplib",
                "php-console/php-console": "Allow sending log messages to Google Chrome",
                "rollbar/rollbar": "Allow sending log messages to Rollbar",
                "ruflin/elastica": "Allow sending log messages to an Elastic Search server"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Monolog\\": "src/Monolog"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                "name": "Jordi Boggiano",
                "email": "j.boggiano@seld.be",
                "homepage": "http://seld.be"
            }],
            "description": "Sends your logs to files, sockets, inboxes, databases and various web services",
            "homepage": "http://github.com/Seldaek/monolog",
            "keywords": [
                "log",
                "logging",
                "psr-3"
            ],
            "funding": [{
                    "url": "https://github.com/Seldaek",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/monolog/monolog",
                    "type": "tidelift"
                }
            ],
            "time": "2020-05-22T08:12:19+00:00"
        },
        {
            "name": "nesbot/carbon",
            "version": "2.35.0",
            "source": {
                "type": "git",
                "url": "https://github.com/briannesbitt/Carbon.git",
                "reference": "4b9bd835261ef23d36397a46a76b496a458305e5"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/briannesbitt/Carbon/zipball/4b9bd835261ef23d36397a46a76b496a458305e5",
                "reference": "4b9bd835261ef23d36397a46a76b496a458305e5",
                "shasum": ""
            },
            "require": {
                "ext-json": "*",
                "php": "^7.1.8 || ^8.0",
                "symfony/polyfill-mbstring": "^1.0",
                "symfony/translation": "^3.4 || ^4.0 || ^5.0"
            },
            "require-dev": {
                "doctrine/orm": "^2.7",
                "friendsofphp/php-cs-fixer": "^2.14 || ^3.0",
                "kylekatarnls/multi-tester": "^1.1",
                "phpmd/phpmd": "^2.8",
                "phpstan/phpstan": "^0.11",
                "phpunit/phpunit": "^7.5 || ^8.0",
                "squizlabs/php_codesniffer": "^3.4"
            },
            "bin": [
                "bin/carbon"
            ],
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.x-dev",
                    "dev-3.x": "3.x-dev"
                },
                "laravel": {
                    "providers": [
                        "Carbon\\Laravel\\ServiceProvider"
                    ]
                }
            },
            "autoload": {
                "psr-4": {
                    "Carbon\\": "src/Carbon/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                    "name": "Brian Nesbitt",
                    "email": "brian@nesbot.com",
                    "homepage": "http://nesbot.com"
                },
                {
                    "name": "kylekatarnls",
                    "homepage": "http://github.com/kylekatarnls"
                }
            ],
            "description": "An API extension for DateTime that supports 281 different languages.",
            "homepage": "http://carbon.nesbot.com",
            "keywords": [
                "date",
                "datetime",
                "time"
            ],
            "funding": [{
                    "url": "https://opencollective.com/Carbon",
                    "type": "open_collective"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/nesbot/carbon",
                    "type": "tidelift"
                }
            ],
            "time": "2020-05-24T18:27:52+00:00"
        },
        {
            "name": "nikic/php-parser",
            "version": "v4.5.0",
            "source": {
                "type": "git",
                "url": "https://github.com/nikic/PHP-Parser.git",
                "reference": "53c2753d756f5adb586dca79c2ec0e2654dd9463"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/nikic/PHP-Parser/zipball/53c2753d756f5adb586dca79c2ec0e2654dd9463",
                "reference": "53c2753d756f5adb586dca79c2ec0e2654dd9463",
                "shasum": ""
            },
            "require": {
                "ext-tokenizer": "*",
                "php": ">=7.0"
            },
            "require-dev": {
                "ircmaxell/php-yacc": "0.0.5",
                "phpunit/phpunit": "^6.5 || ^7.0 || ^8.0"
            },
            "bin": [
                "bin/php-parse"
            ],
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "4.3-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "PhpParser\\": "lib/PhpParser"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [{
                "name": "Nikita Popov"
            }],
            "description": "A PHP parser written in PHP",
            "keywords": [
                "parser",
                "php"
            ],
            "time": "2020-06-03T07:24:19+00:00"
        },
        {
            "name": "opis/closure",
            "version": "3.5.5",
            "source": {
                "type": "git",
                "url": "https://github.com/opis/closure.git",
                "reference": "dec9fc5ecfca93f45cd6121f8e6f14457dff372c"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/opis/closure/zipball/dec9fc5ecfca93f45cd6121f8e6f14457dff372c",
                "reference": "dec9fc5ecfca93f45cd6121f8e6f14457dff372c",
                "shasum": ""
            },
            "require": {
                "php": "^5.4 || ^7.0"
            },
            "require-dev": {
                "jeremeamia/superclosure": "^2.0",
                "phpunit/phpunit": "^4.0 || ^5.0 || ^6.0 || ^7.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "3.5.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Opis\\Closure\\": "src/"
                },
                "files": [
                    "functions.php"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                    "name": "Marius Sarca",
                    "email": "marius.sarca@gmail.com"
                },
                {
                    "name": "Sorin Sarca",
                    "email": "sarca_sorin@hotmail.com"
                }
            ],
            "description": "A library that can be used to serialize closures (anonymous functions) and arbitrary objects.",
            "homepage": "https://opis.io/closure",
            "keywords": [
                "anonymous functions",
                "closure",
                "function",
                "serializable",
                "serialization",
                "serialize"
            ],
            "time": "2020-06-17T14:59:55+00:00"
        },
        {
            "name": "phpoption/phpoption",
            "version": "1.7.4",
            "source": {
                "type": "git",
                "url": "https://github.com/schmittjoh/php-option.git",
                "reference": "b2ada2ad5d8a32b89088b8adc31ecd2e3a13baf3"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/schmittjoh/php-option/zipball/b2ada2ad5d8a32b89088b8adc31ecd2e3a13baf3",
                "reference": "b2ada2ad5d8a32b89088b8adc31ecd2e3a13baf3",
                "shasum": ""
            },
            "require": {
                "php": "^5.5.9 || ^7.0 || ^8.0"
            },
            "require-dev": {
                "bamarni/composer-bin-plugin": "^1.3",
                "phpunit/phpunit": "^4.8.35 || ^5.0 || ^6.0 || ^7.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.7-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "PhpOption\\": "src/PhpOption/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "Apache-2.0"
            ],
            "authors": [{
                    "name": "Johannes M. Schmitt",
                    "email": "schmittjoh@gmail.com"
                },
                {
                    "name": "Graham Campbell",
                    "email": "graham@alt-three.com"
                }
            ],
            "description": "Option Type for PHP",
            "keywords": [
                "language",
                "option",
                "php",
                "type"
            ],
            "funding": [{
                    "url": "https://github.com/GrahamCampbell",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/phpoption/phpoption",
                    "type": "tidelift"
                }
            ],
            "time": "2020-06-07T10:40:07+00:00"
        },
        {
            "name": "psr/container",
            "version": "1.0.0",
            "source": {
                "type": "git",
                "url": "https://github.com/php-fig/container.git",
                "reference": "b7ce3b176482dbbc1245ebf52b181af44c2cf55f"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/php-fig/container/zipball/b7ce3b176482dbbc1245ebf52b181af44c2cf55f",
                "reference": "b7ce3b176482dbbc1245ebf52b181af44c2cf55f",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.0.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Psr\\Container\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                "name": "PHP-FIG",
                "homepage": "http://www.php-fig.org/"
            }],
            "description": "Common Container Interface (PHP FIG PSR-11)",
            "homepage": "https://github.com/php-fig/container",
            "keywords": [
                "PSR-11",
                "container",
                "container-interface",
                "container-interop",
                "psr"
            ],
            "time": "2017-02-14T16:28:37+00:00"
        },
        {
            "name": "psr/event-dispatcher",
            "version": "1.0.0",
            "source": {
                "type": "git",
                "url": "https://github.com/php-fig/event-dispatcher.git",
                "reference": "dbefd12671e8a14ec7f180cab83036ed26714bb0"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/php-fig/event-dispatcher/zipball/dbefd12671e8a14ec7f180cab83036ed26714bb0",
                "reference": "dbefd12671e8a14ec7f180cab83036ed26714bb0",
                "shasum": ""
            },
            "require": {
                "php": ">=7.2.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.0.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Psr\\EventDispatcher\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                "name": "PHP-FIG",
                "homepage": "http://www.php-fig.org/"
            }],
            "description": "Standard interfaces for event handling.",
            "keywords": [
                "events",
                "psr",
                "psr-14"
            ],
            "time": "2019-01-08T18:20:26+00:00"
        },
        {
            "name": "psr/http-message",
            "version": "1.0.1",
            "source": {
                "type": "git",
                "url": "https://github.com/php-fig/http-message.git",
                "reference": "f6561bf28d520154e4b0ec72be95418abe6d9363"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/php-fig/http-message/zipball/f6561bf28d520154e4b0ec72be95418abe6d9363",
                "reference": "f6561bf28d520154e4b0ec72be95418abe6d9363",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.0.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Psr\\Http\\Message\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                "name": "PHP-FIG",
                "homepage": "http://www.php-fig.org/"
            }],
            "description": "Common interface for HTTP messages",
            "homepage": "https://github.com/php-fig/http-message",
            "keywords": [
                "http",
                "http-message",
                "psr",
                "psr-7",
                "request",
                "response"
            ],
            "time": "2016-08-06T14:39:51+00:00"
        },
        {
            "name": "psr/log",
            "version": "1.1.3",
            "source": {
                "type": "git",
                "url": "https://github.com/php-fig/log.git",
                "reference": "0f73288fd15629204f9d42b7055f72dacbe811fc"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/php-fig/log/zipball/0f73288fd15629204f9d42b7055f72dacbe811fc",
                "reference": "0f73288fd15629204f9d42b7055f72dacbe811fc",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.1.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Psr\\Log\\": "Psr/Log/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                "name": "PHP-FIG",
                "homepage": "http://www.php-fig.org/"
            }],
            "description": "Common interface for logging libraries",
            "homepage": "https://github.com/php-fig/log",
            "keywords": [
                "log",
                "psr",
                "psr-3"
            ],
            "time": "2020-03-23T09:12:05+00:00"
        },
        {
            "name": "psr/simple-cache",
            "version": "1.0.1",
            "source": {
                "type": "git",
                "url": "https://github.com/php-fig/simple-cache.git",
                "reference": "408d5eafb83c57f6365a3ca330ff23aa4a5fa39b"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/php-fig/simple-cache/zipball/408d5eafb83c57f6365a3ca330ff23aa4a5fa39b",
                "reference": "408d5eafb83c57f6365a3ca330ff23aa4a5fa39b",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.0.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Psr\\SimpleCache\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                "name": "PHP-FIG",
                "homepage": "http://www.php-fig.org/"
            }],
            "description": "Common interfaces for simple caching",
            "keywords": [
                "cache",
                "caching",
                "psr",
                "psr-16",
                "simple-cache"
            ],
            "time": "2017-10-23T01:57:42+00:00"
        },
        {
            "name": "psy/psysh",
            "version": "v0.10.4",
            "source": {
                "type": "git",
                "url": "https://github.com/bobthecow/psysh.git",
                "reference": "a8aec1b2981ab66882a01cce36a49b6317dc3560"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/bobthecow/psysh/zipball/a8aec1b2981ab66882a01cce36a49b6317dc3560",
                "reference": "a8aec1b2981ab66882a01cce36a49b6317dc3560",
                "shasum": ""
            },
            "require": {
                "dnoegel/php-xdg-base-dir": "0.1.*",
                "ext-json": "*",
                "ext-tokenizer": "*",
                "nikic/php-parser": "~4.0|~3.0|~2.0|~1.3",
                "php": "^8.0 || ^7.0 || ^5.5.9",
                "symfony/console": "~5.0|~4.0|~3.0|^2.4.2|~2.3.10",
                "symfony/var-dumper": "~5.0|~4.0|~3.0|~2.7"
            },
            "require-dev": {
                "bamarni/composer-bin-plugin": "^1.2",
                "hoa/console": "3.17.*"
            },
            "suggest": {
                "ext-pcntl": "Enabling the PCNTL extension makes PsySH a lot happier :)",
                "ext-pdo-sqlite": "The doc command requires SQLite to work.",
                "ext-posix": "If you have PCNTL, you'll want the POSIX extension as well.",
                "ext-readline": "Enables support for arrow-key history navigation, and showing and manipulating command history.",
                "hoa/console": "A pure PHP readline implementation. You'll want this if your PHP install doesn't already support readline or libedit."
            },
            "bin": [
                "bin/psysh"
            ],
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "0.10.x-dev"
                }
            },
            "autoload": {
                "files": [
                    "src/functions.php"
                ],
                "psr-4": {
                    "Psy\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                "name": "Justin Hileman",
                "email": "justin@justinhileman.info",
                "homepage": "http://justinhileman.com"
            }],
            "description": "An interactive shell for modern PHP.",
            "homepage": "http://psysh.org",
            "keywords": [
                "REPL",
                "console",
                "interactive",
                "shell"
            ],
            "time": "2020-05-03T19:32:03+00:00"
        },
        {
            "name": "ralouphie/getallheaders",
            "version": "3.0.3",
            "source": {
                "type": "git",
                "url": "https://github.com/ralouphie/getallheaders.git",
                "reference": "120b605dfeb996808c31b6477290a714d356e822"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/ralouphie/getallheaders/zipball/120b605dfeb996808c31b6477290a714d356e822",
                "reference": "120b605dfeb996808c31b6477290a714d356e822",
                "shasum": ""
            },
            "require": {
                "php": ">=5.6"
            },
            "require-dev": {
                "php-coveralls/php-coveralls": "^2.1",
                "phpunit/phpunit": "^5 || ^6.5"
            },
            "type": "library",
            "autoload": {
                "files": [
                    "src/getallheaders.php"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                "name": "Ralph Khattar",
                "email": "ralph.khattar@gmail.com"
            }],
            "description": "A polyfill for getallheaders.",
            "time": "2019-03-08T08:55:37+00:00"
        },
        {
            "name": "ramsey/collection",
            "version": "1.0.1",
            "source": {
                "type": "git",
                "url": "https://github.com/ramsey/collection.git",
                "reference": "925ad8cf55ba7a3fc92e332c58fd0478ace3e1ca"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/ramsey/collection/zipball/925ad8cf55ba7a3fc92e332c58fd0478ace3e1ca",
                "reference": "925ad8cf55ba7a3fc92e332c58fd0478ace3e1ca",
                "shasum": ""
            },
            "require": {
                "php": "^7.2"
            },
            "require-dev": {
                "dealerdirect/phpcodesniffer-composer-installer": "^0.5.0",
                "fzaninotto/faker": "^1.5",
                "jakub-onderka/php-parallel-lint": "^1",
                "jangregor/phpstan-prophecy": "^0.6",
                "mockery/mockery": "^1.3",
                "phpstan/extension-installer": "^1",
                "phpstan/phpdoc-parser": "0.4.1",
                "phpstan/phpstan": "^0.12",
                "phpstan/phpstan-mockery": "^0.12",
                "phpstan/phpstan-phpunit": "^0.12",
                "phpunit/phpunit": "^8.5",
                "slevomat/coding-standard": "^6.0",
                "squizlabs/php_codesniffer": "^3.5"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Ramsey\\Collection\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                "name": "Ben Ramsey",
                "email": "ben@benramsey.com",
                "homepage": "https://benramsey.com"
            }],
            "description": "A PHP 7.2+ library for representing and manipulating collections.",
            "homepage": "https://github.com/ramsey/collection",
            "keywords": [
                "array",
                "collection",
                "hash",
                "map",
                "queue",
                "set"
            ],
            "time": "2020-01-05T00:22:59+00:00"
        },
        {
            "name": "ramsey/uuid",
            "version": "4.0.1",
            "source": {
                "type": "git",
                "url": "https://github.com/ramsey/uuid.git",
                "reference": "ba8fff1d3abb8bb4d35a135ed22a31c6ef3ede3d"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/ramsey/uuid/zipball/ba8fff1d3abb8bb4d35a135ed22a31c6ef3ede3d",
                "reference": "ba8fff1d3abb8bb4d35a135ed22a31c6ef3ede3d",
                "shasum": ""
            },
            "require": {
                "brick/math": "^0.8",
                "ext-json": "*",
                "php": "^7.2 || ^8",
                "ramsey/collection": "^1.0",
                "symfony/polyfill-ctype": "^1.8"
            },
            "replace": {
                "rhumsaa/uuid": "self.version"
            },
            "require-dev": {
                "codeception/aspect-mock": "^3",
                "dealerdirect/phpcodesniffer-composer-installer": "^0.6.2",
                "doctrine/annotations": "^1.8",
                "goaop/framework": "^2",
                "mockery/mockery": "^1.3",
                "moontoast/math": "^1.1",
                "paragonie/random-lib": "^2",
                "php-mock/php-mock-mockery": "^1.3",
                "php-mock/php-mock-phpunit": "^2.5",
                "php-parallel-lint/php-parallel-lint": "^1.1",
                "phpstan/extension-installer": "^1.0",
                "phpstan/phpdoc-parser": "0.4.3",
                "phpstan/phpstan": "^0.12",
                "phpstan/phpstan-mockery": "^0.12",
                "phpstan/phpstan-phpunit": "^0.12",
                "phpunit/phpunit": "^8.5",
                "psy/psysh": "^0.10.0",
                "slevomat/coding-standard": "^6.0",
                "squizlabs/php_codesniffer": "^3.5",
                "vimeo/psalm": "3.9.4"
            },
            "suggest": {
                "ext-bcmath": "Enables faster math with arbitrary-precision integers using BCMath.",
                "ext-ctype": "Enables faster processing of character classification using ctype functions.",
                "ext-gmp": "Enables faster math with arbitrary-precision integers using GMP.",
                "ext-uuid": "Enables the use of PeclUuidTimeGenerator and PeclUuidRandomGenerator.",
                "paragonie/random-lib": "Provides RandomLib for use with the RandomLibAdapter",
                "ramsey/uuid-doctrine": "Allows the use of Ramsey\\Uuid\\Uuid as Doctrine field type."
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "4.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Ramsey\\Uuid\\": "src/"
                },
                "files": [
                    "src/functions.php"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "description": "A PHP library for generating and working with universally unique identifiers (UUIDs).",
            "homepage": "https://github.com/ramsey/uuid",
            "keywords": [
                "guid",
                "identifier",
                "uuid"
            ],
            "funding": [{
                "url": "https://github.com/ramsey",
                "type": "github"
            }],
            "time": "2020-03-29T20:13:32+00:00"
        },
        {
            "name": "swiftmailer/swiftmailer",
            "version": "v6.2.3",
            "source": {
                "type": "git",
                "url": "https://github.com/swiftmailer/swiftmailer.git",
                "reference": "149cfdf118b169f7840bbe3ef0d4bc795d1780c9"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/swiftmailer/swiftmailer/zipball/149cfdf118b169f7840bbe3ef0d4bc795d1780c9",
                "reference": "149cfdf118b169f7840bbe3ef0d4bc795d1780c9",
                "shasum": ""
            },
            "require": {
                "egulias/email-validator": "~2.0",
                "php": ">=7.0.0",
                "symfony/polyfill-iconv": "^1.0",
                "symfony/polyfill-intl-idn": "^1.10",
                "symfony/polyfill-mbstring": "^1.0"
            },
            "require-dev": {
                "mockery/mockery": "~0.9.1",
                "symfony/phpunit-bridge": "^3.4.19|^4.1.8"
            },
            "suggest": {
                "ext-intl": "Needed to support internationalized email addresses",
                "true/punycode": "Needed to support internationalized email addresses, if ext-intl is not installed"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "6.2-dev"
                }
            },
            "autoload": {
                "files": [
                    "lib/swift_required.php"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                    "name": "Chris Corbyn"
                },
                {
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                }
            ],
            "description": "Swiftmailer, free feature-rich PHP mailer",
            "homepage": "https://swiftmailer.symfony.com",
            "keywords": [
                "email",
                "mail",
                "mailer"
            ],
            "time": "2019-11-12T09:31:26+00:00"
        },
        {
            "name": "symfony/console",
            "version": "v5.1.2",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/console.git",
                "reference": "34ac555a3627e324b660e318daa07572e1140123"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/console/zipball/34ac555a3627e324b660e318daa07572e1140123",
                "reference": "34ac555a3627e324b660e318daa07572e1140123",
                "shasum": ""
            },
            "require": {
                "php": ">=7.2.5",
                "symfony/polyfill-mbstring": "~1.0",
                "symfony/polyfill-php73": "^1.8",
                "symfony/polyfill-php80": "^1.15",
                "symfony/service-contracts": "^1.1|^2",
                "symfony/string": "^5.1"
            },
            "conflict": {
                "symfony/dependency-injection": "<4.4",
                "symfony/dotenv": "<5.1",
                "symfony/event-dispatcher": "<4.4",
                "symfony/lock": "<4.4",
                "symfony/process": "<4.4"
            },
            "provide": {
                "psr/log-implementation": "1.0"
            },
            "require-dev": {
                "psr/log": "~1.0",
                "symfony/config": "^4.4|^5.0",
                "symfony/dependency-injection": "^4.4|^5.0",
                "symfony/event-dispatcher": "^4.4|^5.0",
                "symfony/lock": "^4.4|^5.0",
                "symfony/process": "^4.4|^5.0",
                "symfony/var-dumper": "^4.4|^5.0"
            },
            "suggest": {
                "psr/log": "For using the console logger",
                "symfony/event-dispatcher": "",
                "symfony/lock": "",
                "symfony/process": ""
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "5.1-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\Console\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony Console Component",
            "homepage": "https://symfony.com",
            "funding": [{
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2020-06-15T12:59:21+00:00"
        },
        {
            "name": "symfony/css-selector",
            "version": "v5.1.2",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/css-selector.git",
                "reference": "e544e24472d4c97b2d11ade7caacd446727c6bf9"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/css-selector/zipball/e544e24472d4c97b2d11ade7caacd446727c6bf9",
                "reference": "e544e24472d4c97b2d11ade7caacd446727c6bf9",
                "shasum": ""
            },
            "require": {
                "php": ">=7.2.5"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "5.1-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\CssSelector\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Jean-François Simon",
                    "email": "jeanfrancois.simon@sensiolabs.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony CssSelector Component",
            "homepage": "https://symfony.com",
            "funding": [{
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2020-05-20T17:43:50+00:00"
        },
        {
            "name": "symfony/deprecation-contracts",
            "version": "v2.1.2",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/deprecation-contracts.git",
                "reference": "dd99cb3a0aff6cadd2a8d7d7ed72c2161e218337"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/deprecation-contracts/zipball/dd99cb3a0aff6cadd2a8d7d7ed72c2161e218337",
                "reference": "dd99cb3a0aff6cadd2a8d7d7ed72c2161e218337",
                "shasum": ""
            },
            "require": {
                "php": ">=7.1"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.1-dev"
                }
            },
            "autoload": {
                "files": [
                    "function.php"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "A generic function and convention to trigger deprecation notices",
            "homepage": "https://symfony.com",
            "funding": [{
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2020-05-27T08:34:37+00:00"
        },
        {
            "name": "symfony/error-handler",
            "version": "v5.1.2",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/error-handler.git",
                "reference": "7d0b927b9d3dc41d7d46cda38cbfcd20cdcbb896"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/error-handler/zipball/7d0b927b9d3dc41d7d46cda38cbfcd20cdcbb896",
                "reference": "7d0b927b9d3dc41d7d46cda38cbfcd20cdcbb896",
                "shasum": ""
            },
            "require": {
                "php": ">=7.2.5",
                "psr/log": "^1.0",
                "symfony/polyfill-php80": "^1.15",
                "symfony/var-dumper": "^4.4|^5.0"
            },
            "require-dev": {
                "symfony/deprecation-contracts": "^2.1",
                "symfony/http-kernel": "^4.4|^5.0",
                "symfony/serializer": "^4.4|^5.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "5.1-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\ErrorHandler\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony ErrorHandler Component",
            "homepage": "https://symfony.com",
            "funding": [{
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2020-05-30T20:35:19+00:00"
        },
        {
            "name": "symfony/event-dispatcher",
            "version": "v5.1.2",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/event-dispatcher.git",
                "reference": "cc0d059e2e997e79ca34125a52f3e33de4424ac7"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/event-dispatcher/zipball/cc0d059e2e997e79ca34125a52f3e33de4424ac7",
                "reference": "cc0d059e2e997e79ca34125a52f3e33de4424ac7",
                "shasum": ""
            },
            "require": {
                "php": ">=7.2.5",
                "symfony/deprecation-contracts": "^2.1",
                "symfony/event-dispatcher-contracts": "^2",
                "symfony/polyfill-php80": "^1.15"
            },
            "conflict": {
                "symfony/dependency-injection": "<4.4"
            },
            "provide": {
                "psr/event-dispatcher-implementation": "1.0",
                "symfony/event-dispatcher-implementation": "2.0"
            },
            "require-dev": {
                "psr/log": "~1.0",
                "symfony/config": "^4.4|^5.0",
                "symfony/dependency-injection": "^4.4|^5.0",
                "symfony/expression-language": "^4.4|^5.0",
                "symfony/http-foundation": "^4.4|^5.0",
                "symfony/service-contracts": "^1.1|^2",
                "symfony/stopwatch": "^4.4|^5.0"
            },
            "suggest": {
                "symfony/dependency-injection": "",
                "symfony/http-kernel": ""
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "5.1-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\EventDispatcher\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony EventDispatcher Component",
            "homepage": "https://symfony.com",
            "funding": [{
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2020-05-20T17:43:50+00:00"
        },
        {
            "name": "symfony/event-dispatcher-contracts",
            "version": "v2.1.2",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/event-dispatcher-contracts.git",
                "reference": "405952c4e90941a17e52ef7489a2bd94870bb290"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/event-dispatcher-contracts/zipball/405952c4e90941a17e52ef7489a2bd94870bb290",
                "reference": "405952c4e90941a17e52ef7489a2bd94870bb290",
                "shasum": ""
            },
            "require": {
                "php": ">=7.2.5",
                "psr/event-dispatcher": "^1"
            },
            "suggest": {
                "symfony/event-dispatcher-implementation": ""
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.1-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Contracts\\EventDispatcher\\": ""
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Generic abstractions related to dispatching event",
            "homepage": "https://symfony.com",
            "keywords": [
                "abstractions",
                "contracts",
                "decoupling",
                "interfaces",
                "interoperability",
                "standards"
            ],
            "funding": [{
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2020-05-20T17:43:50+00:00"
        },
        {
            "name": "symfony/finder",
            "version": "v5.1.2",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/finder.git",
                "reference": "4298870062bfc667cb78d2b379be4bf5dec5f187"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/finder/zipball/4298870062bfc667cb78d2b379be4bf5dec5f187",
                "reference": "4298870062bfc667cb78d2b379be4bf5dec5f187",
                "shasum": ""
            },
            "require": {
                "php": ">=7.2.5"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "5.1-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\Finder\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony Finder Component",
            "homepage": "https://symfony.com",
            "funding": [{
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2020-05-20T17:43:50+00:00"
        },
        {
            "name": "symfony/http-foundation",
            "version": "v5.1.2",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/http-foundation.git",
                "reference": "f93055171b847915225bd5b0a5792888419d8d75"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/http-foundation/zipball/f93055171b847915225bd5b0a5792888419d8d75",
                "reference": "f93055171b847915225bd5b0a5792888419d8d75",
                "shasum": ""
            },
            "require": {
                "php": ">=7.2.5",
                "symfony/deprecation-contracts": "^2.1",
                "symfony/polyfill-mbstring": "~1.1",
                "symfony/polyfill-php80": "^1.15"
            },
            "require-dev": {
                "predis/predis": "~1.0",
                "symfony/cache": "^4.4|^5.0",
                "symfony/expression-language": "^4.4|^5.0",
                "symfony/mime": "^4.4|^5.0"
            },
            "suggest": {
                "symfony/mime": "To use the file extension guesser"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "5.1-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\HttpFoundation\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony HttpFoundation Component",
            "homepage": "https://symfony.com",
            "funding": [{
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2020-06-15T06:52:54+00:00"
        },
        {
            "name": "symfony/http-kernel",
            "version": "v5.1.2",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/http-kernel.git",
                "reference": "a18c27ace1ef344ffcb129a5b089bad7643b387a"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/http-kernel/zipball/a18c27ace1ef344ffcb129a5b089bad7643b387a",
                "reference": "a18c27ace1ef344ffcb129a5b089bad7643b387a",
                "shasum": ""
            },
            "require": {
                "php": ">=7.2.5",
                "psr/log": "~1.0",
                "symfony/deprecation-contracts": "^2.1",
                "symfony/error-handler": "^4.4|^5.0",
                "symfony/event-dispatcher": "^5.0",
                "symfony/http-foundation": "^4.4|^5.0",
                "symfony/polyfill-ctype": "^1.8",
                "symfony/polyfill-php73": "^1.9",
                "symfony/polyfill-php80": "^1.15"
            },
            "conflict": {
                "symfony/browser-kit": "<4.4",
                "symfony/cache": "<5.0",
                "symfony/config": "<5.0",
                "symfony/console": "<4.4",
                "symfony/dependency-injection": "<4.4",
                "symfony/doctrine-bridge": "<5.0",
                "symfony/form": "<5.0",
                "symfony/http-client": "<5.0",
                "symfony/mailer": "<5.0",
                "symfony/messenger": "<5.0",
                "symfony/translation": "<5.0",
                "symfony/twig-bridge": "<5.0",
                "symfony/validator": "<5.0",
                "twig/twig": "<2.4"
            },
            "provide": {
                "psr/log-implementation": "1.0"
            },
            "require-dev": {
                "psr/cache": "~1.0",
                "symfony/browser-kit": "^4.4|^5.0",
                "symfony/config": "^5.0",
                "symfony/console": "^4.4|^5.0",
                "symfony/css-selector": "^4.4|^5.0",
                "symfony/dependency-injection": "^4.4|^5.0",
                "symfony/dom-crawler": "^4.4|^5.0",
                "symfony/expression-language": "^4.4|^5.0",
                "symfony/finder": "^4.4|^5.0",
                "symfony/process": "^4.4|^5.0",
                "symfony/routing": "^4.4|^5.0",
                "symfony/stopwatch": "^4.4|^5.0",
                "symfony/translation": "^4.4|^5.0",
                "symfony/translation-contracts": "^1.1|^2",
                "twig/twig": "^2.4|^3.0"
            },
            "suggest": {
                "symfony/browser-kit": "",
                "symfony/config": "",
                "symfony/console": "",
                "symfony/dependency-injection": ""
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "5.1-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\HttpKernel\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony HttpKernel Component",
            "homepage": "https://symfony.com",
            "funding": [{
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2020-06-15T13:51:38+00:00"
        },
        {
            "name": "symfony/mime",
            "version": "v5.1.2",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/mime.git",
                "reference": "c0c418f05e727606e85b482a8591519c4712cf45"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/mime/zipball/c0c418f05e727606e85b482a8591519c4712cf45",
                "reference": "c0c418f05e727606e85b482a8591519c4712cf45",
                "shasum": ""
            },
            "require": {
                "php": ">=7.2.5",
                "symfony/polyfill-intl-idn": "^1.10",
                "symfony/polyfill-mbstring": "^1.0",
                "symfony/polyfill-php80": "^1.15"
            },
            "conflict": {
                "symfony/mailer": "<4.4"
            },
            "require-dev": {
                "egulias/email-validator": "^2.1.10",
                "symfony/dependency-injection": "^4.4|^5.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "5.1-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\Mime\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "A library to manipulate MIME messages",
            "homepage": "https://symfony.com",
            "keywords": [
                "mime",
                "mime-type"
            ],
            "funding": [{
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2020-06-09T15:07:35+00:00"
        },
        {
            "name": "symfony/polyfill-ctype",
            "version": "v1.17.1",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/polyfill-ctype.git",
                "reference": "2edd75b8b35d62fd3eeabba73b26b8f1f60ce13d"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/polyfill-ctype/zipball/2edd75b8b35d62fd3eeabba73b26b8f1f60ce13d",
                "reference": "2edd75b8b35d62fd3eeabba73b26b8f1f60ce13d",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.3"
            },
            "suggest": {
                "ext-ctype": "For best performance"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.17-dev"
                },
                "thanks": {
                    "name": "symfony/polyfill",
                    "url": "https://github.com/symfony/polyfill"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Polyfill\\Ctype\\": ""
                },
                "files": [
                    "bootstrap.php"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                    "name": "Gert de Pagter",
                    "email": "BackEndTea@gmail.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony polyfill for ctype functions",
            "homepage": "https://symfony.com",
            "keywords": [
                "compatibility",
                "ctype",
                "polyfill",
                "portable"
            ],
            "funding": [{
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2020-06-06T08:46:27+00:00"
        },
        {
            "name": "symfony/polyfill-iconv",
            "version": "v1.17.1",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/polyfill-iconv.git",
                "reference": "ba6c9c18db36235b859cc29b8372d1c01298c035"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/polyfill-iconv/zipball/ba6c9c18db36235b859cc29b8372d1c01298c035",
                "reference": "ba6c9c18db36235b859cc29b8372d1c01298c035",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.3"
            },
            "suggest": {
                "ext-iconv": "For best performance"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.17-dev"
                },
                "thanks": {
                    "name": "symfony/polyfill",
                    "url": "https://github.com/symfony/polyfill"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Polyfill\\Iconv\\": ""
                },
                "files": [
                    "bootstrap.php"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony polyfill for the Iconv extension",
            "homepage": "https://symfony.com",
            "keywords": [
                "compatibility",
                "iconv",
                "polyfill",
                "portable",
                "shim"
            ],
            "funding": [{
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2020-06-06T08:46:27+00:00"
        },
        {
            "name": "symfony/polyfill-intl-grapheme",
            "version": "v1.17.1",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/polyfill-intl-grapheme.git",
                "reference": "6e4dbcf5e81eba86e36731f94fe56b1726835846"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/polyfill-intl-grapheme/zipball/6e4dbcf5e81eba86e36731f94fe56b1726835846",
                "reference": "6e4dbcf5e81eba86e36731f94fe56b1726835846",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.3"
            },
            "suggest": {
                "ext-intl": "For best performance"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.17-dev"
                },
                "thanks": {
                    "name": "symfony/polyfill",
                    "url": "https://github.com/symfony/polyfill"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Polyfill\\Intl\\Grapheme\\": ""
                },
                "files": [
                    "bootstrap.php"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony polyfill for intl's grapheme_* functions",
            "homepage": "https://symfony.com",
            "keywords": [
                "compatibility",
                "grapheme",
                "intl",
                "polyfill",
                "portable",
                "shim"
            ],
            "funding": [{
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2020-06-06T08:46:27+00:00"
        },
        {
            "name": "symfony/polyfill-intl-idn",
            "version": "v1.17.1",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/polyfill-intl-idn.git",
                "reference": "a57f8161502549a742a63c09f0a604997bf47027"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/polyfill-intl-idn/zipball/a57f8161502549a742a63c09f0a604997bf47027",
                "reference": "a57f8161502549a742a63c09f0a604997bf47027",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.3",
                "symfony/polyfill-mbstring": "^1.3",
                "symfony/polyfill-php72": "^1.10"
            },
            "suggest": {
                "ext-intl": "For best performance"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.17-dev"
                },
                "thanks": {
                    "name": "symfony/polyfill",
                    "url": "https://github.com/symfony/polyfill"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Polyfill\\Intl\\Idn\\": ""
                },
                "files": [
                    "bootstrap.php"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                    "name": "Laurent Bassin",
                    "email": "laurent@bassin.info"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony polyfill for intl's idn_to_ascii and idn_to_utf8 functions",
            "homepage": "https://symfony.com",
            "keywords": [
                "compatibility",
                "idn",
                "intl",
                "polyfill",
                "portable",
                "shim"
            ],
            "funding": [{
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2020-06-06T08:46:27+00:00"
        },
        {
            "name": "symfony/polyfill-intl-normalizer",
            "version": "v1.17.1",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/polyfill-intl-normalizer.git",
                "reference": "40309d1700e8f72447bb9e7b54af756eeea35620"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/polyfill-intl-normalizer/zipball/40309d1700e8f72447bb9e7b54af756eeea35620",
                "reference": "40309d1700e8f72447bb9e7b54af756eeea35620",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.3"
            },
            "suggest": {
                "ext-intl": "For best performance"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.17-dev"
                },
                "thanks": {
                    "name": "symfony/polyfill",
                    "url": "https://github.com/symfony/polyfill"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Polyfill\\Intl\\Normalizer\\": ""
                },
                "files": [
                    "bootstrap.php"
                ],
                "classmap": [
                    "Resources/stubs"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony polyfill for intl's Normalizer class and related functions",
            "homepage": "https://symfony.com",
            "keywords": [
                "compatibility",
                "intl",
                "normalizer",
                "polyfill",
                "portable",
                "shim"
            ],
            "funding": [{
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2020-06-14T14:40:37+00:00"
        },
        {
            "name": "symfony/polyfill-mbstring",
            "version": "v1.17.1",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/polyfill-mbstring.git",
                "reference": "7110338d81ce1cbc3e273136e4574663627037a7"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/polyfill-mbstring/zipball/7110338d81ce1cbc3e273136e4574663627037a7",
                "reference": "7110338d81ce1cbc3e273136e4574663627037a7",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.3"
            },
            "suggest": {
                "ext-mbstring": "For best performance"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.17-dev"
                },
                "thanks": {
                    "name": "symfony/polyfill",
                    "url": "https://github.com/symfony/polyfill"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Polyfill\\Mbstring\\": ""
                },
                "files": [
                    "bootstrap.php"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony polyfill for the Mbstring extension",
            "homepage": "https://symfony.com",
            "keywords": [
                "compatibility",
                "mbstring",
                "polyfill",
                "portable",
                "shim"
            ],
            "funding": [{
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2020-06-06T08:46:27+00:00"
        },
        {
            "name": "symfony/polyfill-php72",
            "version": "v1.17.0",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/polyfill-php72.git",
                "reference": "f048e612a3905f34931127360bdd2def19a5e582"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/polyfill-php72/zipball/f048e612a3905f34931127360bdd2def19a5e582",
                "reference": "f048e612a3905f34931127360bdd2def19a5e582",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.3"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.17-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Polyfill\\Php72\\": ""
                },
                "files": [
                    "bootstrap.php"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony polyfill backporting some PHP 7.2+ features to lower PHP versions",
            "homepage": "https://symfony.com",
            "keywords": [
                "compatibility",
                "polyfill",
                "portable",
                "shim"
            ],
            "funding": [{
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2020-05-12T16:47:27+00:00"
        },
        {
            "name": "symfony/polyfill-php73",
            "version": "v1.17.1",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/polyfill-php73.git",
                "reference": "fa0837fe02d617d31fbb25f990655861bb27bd1a"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/polyfill-php73/zipball/fa0837fe02d617d31fbb25f990655861bb27bd1a",
                "reference": "fa0837fe02d617d31fbb25f990655861bb27bd1a",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.3"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.17-dev"
                },
                "thanks": {
                    "name": "symfony/polyfill",
                    "url": "https://github.com/symfony/polyfill"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Polyfill\\Php73\\": ""
                },
                "files": [
                    "bootstrap.php"
                ],
                "classmap": [
                    "Resources/stubs"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony polyfill backporting some PHP 7.3+ features to lower PHP versions",
            "homepage": "https://symfony.com",
            "keywords": [
                "compatibility",
                "polyfill",
                "portable",
                "shim"
            ],
            "funding": [{
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2020-06-06T08:46:27+00:00"
        },
        {
            "name": "symfony/polyfill-php80",
            "version": "v1.17.1",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/polyfill-php80.git",
                "reference": "4a5b6bba3259902e386eb80dd1956181ee90b5b2"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/polyfill-php80/zipball/4a5b6bba3259902e386eb80dd1956181ee90b5b2",
                "reference": "4a5b6bba3259902e386eb80dd1956181ee90b5b2",
                "shasum": ""
            },
            "require": {
                "php": ">=7.0.8"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.17-dev"
                },
                "thanks": {
                    "name": "symfony/polyfill",
                    "url": "https://github.com/symfony/polyfill"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Polyfill\\Php80\\": ""
                },
                "files": [
                    "bootstrap.php"
                ],
                "classmap": [
                    "Resources/stubs"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                    "name": "Ion Bazan",
                    "email": "ion.bazan@gmail.com"
                },
                {
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony polyfill backporting some PHP 8.0+ features to lower PHP versions",
            "homepage": "https://symfony.com",
            "keywords": [
                "compatibility",
                "polyfill",
                "portable",
                "shim"
            ],
            "funding": [{
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2020-06-06T08:46:27+00:00"
        },
        {
            "name": "symfony/process",
            "version": "v5.1.2",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/process.git",
                "reference": "7f6378c1fa2147eeb1b4c385856ce9de0d46ebd1"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/process/zipball/7f6378c1fa2147eeb1b4c385856ce9de0d46ebd1",
                "reference": "7f6378c1fa2147eeb1b4c385856ce9de0d46ebd1",
                "shasum": ""
            },
            "require": {
                "php": ">=7.2.5",
                "symfony/polyfill-php80": "^1.15"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "5.1-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\Process\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony Process Component",
            "homepage": "https://symfony.com",
            "funding": [{
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2020-05-30T20:35:19+00:00"
        },
        {
            "name": "symfony/routing",
            "version": "v5.1.2",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/routing.git",
                "reference": "bbd0ba121d623f66d165a55a108008968911f3eb"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/routing/zipball/bbd0ba121d623f66d165a55a108008968911f3eb",
                "reference": "bbd0ba121d623f66d165a55a108008968911f3eb",
                "shasum": ""
            },
            "require": {
                "php": ">=7.2.5",
                "symfony/deprecation-contracts": "^2.1",
                "symfony/polyfill-php80": "^1.15"
            },
            "conflict": {
                "symfony/config": "<5.0",
                "symfony/dependency-injection": "<4.4",
                "symfony/yaml": "<4.4"
            },
            "require-dev": {
                "doctrine/annotations": "~1.2",
                "psr/log": "~1.0",
                "symfony/config": "^5.0",
                "symfony/dependency-injection": "^4.4|^5.0",
                "symfony/expression-language": "^4.4|^5.0",
                "symfony/http-foundation": "^4.4|^5.0",
                "symfony/yaml": "^4.4|^5.0"
            },
            "suggest": {
                "doctrine/annotations": "For using the annotation loader",
                "symfony/config": "For using the all-in-one router or any loader",
                "symfony/expression-language": "For using expression matching",
                "symfony/http-foundation": "For using a Symfony Request object",
                "symfony/yaml": "For using the YAML loader"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "5.1-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\Routing\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony Routing Component",
            "homepage": "https://symfony.com",
            "keywords": [
                "router",
                "routing",
                "uri",
                "url"
            ],
            "funding": [{
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2020-06-10T11:49:58+00:00"
        },
        {
            "name": "symfony/service-contracts",
            "version": "v2.1.2",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/service-contracts.git",
                "reference": "66a8f0957a3ca54e4f724e49028ab19d75a8918b"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/service-contracts/zipball/66a8f0957a3ca54e4f724e49028ab19d75a8918b",
                "reference": "66a8f0957a3ca54e4f724e49028ab19d75a8918b",
                "shasum": ""
            },
            "require": {
                "php": ">=7.2.5",
                "psr/container": "^1.0"
            },
            "suggest": {
                "symfony/service-implementation": ""
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.1-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Contracts\\Service\\": ""
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Generic abstractions related to writing services",
            "homepage": "https://symfony.com",
            "keywords": [
                "abstractions",
                "contracts",
                "decoupling",
                "interfaces",
                "interoperability",
                "standards"
            ],
            "funding": [{
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2020-05-20T17:43:50+00:00"
        },
        {
            "name": "symfony/string",
            "version": "v5.1.2",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/string.git",
                "reference": "ac70459db781108db7c6d8981dd31ce0e29e3298"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/string/zipball/ac70459db781108db7c6d8981dd31ce0e29e3298",
                "reference": "ac70459db781108db7c6d8981dd31ce0e29e3298",
                "shasum": ""
            },
            "require": {
                "php": ">=7.2.5",
                "symfony/polyfill-ctype": "~1.8",
                "symfony/polyfill-intl-grapheme": "~1.0",
                "symfony/polyfill-intl-normalizer": "~1.0",
                "symfony/polyfill-mbstring": "~1.0",
                "symfony/polyfill-php80": "~1.15"
            },
            "require-dev": {
                "symfony/error-handler": "^4.4|^5.0",
                "symfony/http-client": "^4.4|^5.0",
                "symfony/translation-contracts": "^1.1|^2",
                "symfony/var-exporter": "^4.4|^5.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "5.1-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\String\\": ""
                },
                "files": [
                    "Resources/functions.php"
                ],
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony String component",
            "homepage": "https://symfony.com",
            "keywords": [
                "grapheme",
                "i18n",
                "string",
                "unicode",
                "utf-8",
                "utf8"
            ],
            "funding": [{
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2020-06-11T12:16:36+00:00"
        },
        {
            "name": "symfony/translation",
            "version": "v5.1.2",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/translation.git",
                "reference": "d387f07d4c15f9c09439cf3f13ddbe0b2c5e8be2"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/translation/zipball/d387f07d4c15f9c09439cf3f13ddbe0b2c5e8be2",
                "reference": "d387f07d4c15f9c09439cf3f13ddbe0b2c5e8be2",
                "shasum": ""
            },
            "require": {
                "php": ">=7.2.5",
                "symfony/polyfill-mbstring": "~1.0",
                "symfony/polyfill-php80": "^1.15",
                "symfony/translation-contracts": "^2"
            },
            "conflict": {
                "symfony/config": "<4.4",
                "symfony/dependency-injection": "<5.0",
                "symfony/http-kernel": "<5.0",
                "symfony/twig-bundle": "<5.0",
                "symfony/yaml": "<4.4"
            },
            "provide": {
                "symfony/translation-implementation": "2.0"
            },
            "require-dev": {
                "psr/log": "~1.0",
                "symfony/config": "^4.4|^5.0",
                "symfony/console": "^4.4|^5.0",
                "symfony/dependency-injection": "^5.0",
                "symfony/finder": "^4.4|^5.0",
                "symfony/http-kernel": "^5.0",
                "symfony/intl": "^4.4|^5.0",
                "symfony/service-contracts": "^1.1.2|^2",
                "symfony/yaml": "^4.4|^5.0"
            },
            "suggest": {
                "psr/log-implementation": "To use logging capability in translator",
                "symfony/config": "",
                "symfony/yaml": ""
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "5.1-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\Translation\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony Translation Component",
            "homepage": "https://symfony.com",
            "funding": [{
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2020-05-30T20:35:19+00:00"
        },
        {
            "name": "symfony/translation-contracts",
            "version": "v2.1.2",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/translation-contracts.git",
                "reference": "e5ca07c8f817f865f618aa072c2fe8e0e637340e"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/translation-contracts/zipball/e5ca07c8f817f865f618aa072c2fe8e0e637340e",
                "reference": "e5ca07c8f817f865f618aa072c2fe8e0e637340e",
                "shasum": ""
            },
            "require": {
                "php": ">=7.2.5"
            },
            "suggest": {
                "symfony/translation-implementation": ""
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.1-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Contracts\\Translation\\": ""
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Generic abstractions related to translation",
            "homepage": "https://symfony.com",
            "keywords": [
                "abstractions",
                "contracts",
                "decoupling",
                "interfaces",
                "interoperability",
                "standards"
            ],
            "funding": [{
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2020-05-20T17:43:50+00:00"
        },
        {
            "name": "symfony/var-dumper",
            "version": "v5.1.2",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/var-dumper.git",
                "reference": "46a942903059b0b05e601f00eb64179e05578c0f"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/var-dumper/zipball/46a942903059b0b05e601f00eb64179e05578c0f",
                "reference": "46a942903059b0b05e601f00eb64179e05578c0f",
                "shasum": ""
            },
            "require": {
                "php": ">=7.2.5",
                "symfony/polyfill-mbstring": "~1.0",
                "symfony/polyfill-php80": "^1.15"
            },
            "conflict": {
                "phpunit/phpunit": "<5.4.3",
                "symfony/console": "<4.4"
            },
            "require-dev": {
                "ext-iconv": "*",
                "symfony/console": "^4.4|^5.0",
                "symfony/process": "^4.4|^5.0",
                "twig/twig": "^2.4|^3.0"
            },
            "suggest": {
                "ext-iconv": "To convert non-UTF-8 strings to UTF-8 (or symfony/polyfill-iconv in case ext-iconv cannot be used).",
                "ext-intl": "To show region name in time zone dump",
                "symfony/console": "To use the ServerDumpCommand and/or the bin/var-dump-server script"
            },
            "bin": [
                "Resources/bin/var-dump-server"
            ],
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "5.1-dev"
                }
            },
            "autoload": {
                "files": [
                    "Resources/functions/dump.php"
                ],
                "psr-4": {
                    "Symfony\\Component\\VarDumper\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony mechanism for exploring and dumping PHP variables",
            "homepage": "https://symfony.com",
            "keywords": [
                "debug",
                "dump"
            ],
            "funding": [{
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2020-05-30T20:35:19+00:00"
        },
        {
            "name": "tijsverkoyen/css-to-inline-styles",
            "version": "2.2.2",
            "source": {
                "type": "git",
                "url": "https://github.com/tijsverkoyen/CssToInlineStyles.git",
                "reference": "dda2ee426acd6d801d5b7fd1001cde9b5f790e15"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/tijsverkoyen/CssToInlineStyles/zipball/dda2ee426acd6d801d5b7fd1001cde9b5f790e15",
                "reference": "dda2ee426acd6d801d5b7fd1001cde9b5f790e15",
                "shasum": ""
            },
            "require": {
                "ext-dom": "*",
                "ext-libxml": "*",
                "php": "^5.5 || ^7.0",
                "symfony/css-selector": "^2.7 || ^3.0 || ^4.0 || ^5.0"
            },
            "require-dev": {
                "phpunit/phpunit": "^4.8.35 || ^5.7 || ^6.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.2.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "TijsVerkoyen\\CssToInlineStyles\\": "src"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [{
                "name": "Tijs Verkoyen",
                "email": "css_to_inline_styles@verkoyen.eu",
                "role": "Developer"
            }],
            "description": "CssToInlineStyles is a class that enables you to convert HTML-pages/files into HTML-pages/files with inline styles. This is very useful when you're sending emails.",
            "homepage": "https://github.com/tijsverkoyen/CssToInlineStyles",
            "time": "2019-10-24T08:53:34+00:00"
        },
        {
            "name": "vlucas/phpdotenv",
            "version": "v4.1.7",
            "source": {
                "type": "git",
                "url": "https://github.com/vlucas/phpdotenv.git",
                "reference": "db63b2ea280fdcf13c4ca392121b0b2450b51193"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/vlucas/phpdotenv/zipball/db63b2ea280fdcf13c4ca392121b0b2450b51193",
                "reference": "db63b2ea280fdcf13c4ca392121b0b2450b51193",
                "shasum": ""
            },
            "require": {
                "php": "^5.5.9 || ^7.0 || ^8.0",
                "phpoption/phpoption": "^1.7.3",
                "symfony/polyfill-ctype": "^1.16"
            },
            "require-dev": {
                "bamarni/composer-bin-plugin": "^1.4.1",
                "ext-filter": "*",
                "ext-pcre": "*",
                "phpunit/phpunit": "^4.8.35 || ^5.7.27 || ^6.5.6 || ^7.0"
            },
            "suggest": {
                "ext-filter": "Required to use the boolean validator.",
                "ext-pcre": "Required to use most of the library."
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "4.1-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Dotenv\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [{
                    "name": "Graham Campbell",
                    "email": "graham@alt-three.com",
                    "homepage": "https://gjcampbell.co.uk/"
                },
                {
                    "name": "Vance Lucas",
                    "email": "vance@vancelucas.com",
                    "homepage": "https://vancelucas.com/"
                }
            ],
            "description": "Loads environment variables from `.env` to `getenv()`, `$_ENV` and `$_SERVER` automagically.",
            "keywords": [
                "dotenv",
                "env",
                "environment"
            ],
            "funding": [{
                    "url": "https://github.com/GrahamCampbell",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/vlucas/phpdotenv",
                    "type": "tidelift"
                }
            ],
            "time": "2020-06-07T18:25:35+00:00"
        },
        {
            "name": "voku/portable-ascii",
            "version": "1.5.2",
            "source": {
                "type": "git",
                "url": "https://github.com/voku/portable-ascii.git",
                "reference": "618631dc601d8eb6ea0a9fbf654ec82f066c4e97"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/voku/portable-ascii/zipball/618631dc601d8eb6ea0a9fbf654ec82f066c4e97",
                "reference": "618631dc601d8eb6ea0a9fbf654ec82f066c4e97",
                "shasum": ""
            },
            "require": {
                "php": ">=7.0.0"
            },
            "require-dev": {
                "phpunit/phpunit": "~6.0 || ~7.0"
            },
            "suggest": {
                "ext-intl": "Use Intl for transliterator_transliterate() support"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "voku\\": "src/voku/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                "name": "Lars Moelleken",
                "homepage": "http://www.moelleken.org/"
            }],
            "description": "Portable ASCII library - performance optimized (ascii) string functions for php.",
            "homepage": "https://github.com/voku/portable-ascii",
            "keywords": [
                "ascii",
                "clean",
                "php"
            ],
            "funding": [{
                    "url": "https://www.paypal.me/moelleken",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/voku",
                    "type": "github"
                },
                {
                    "url": "https://www.patreon.com/voku",
                    "type": "patreon"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/voku/portable-ascii",
                    "type": "tidelift"
                }
            ],
            "time": "2020-06-15T23:49:30+00:00"
        }
    ],
    "packages-dev": [{
            "name": "doctrine/instantiator",
            "version": "1.3.1",
            "source": {
                "type": "git",
                "url": "https://github.com/doctrine/instantiator.git",
                "reference": "f350df0268e904597e3bd9c4685c53e0e333feea"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/doctrine/instantiator/zipball/f350df0268e904597e3bd9c4685c53e0e333feea",
                "reference": "f350df0268e904597e3bd9c4685c53e0e333feea",
                "shasum": ""
            },
            "require": {
                "php": "^7.1 || ^8.0"
            },
            "require-dev": {
                "doctrine/coding-standard": "^6.0",
                "ext-pdo": "*",
                "ext-phar": "*",
                "phpbench/phpbench": "^0.13",
                "phpstan/phpstan-phpunit": "^0.11",
                "phpstan/phpstan-shim": "^0.11",
                "phpunit/phpunit": "^7.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.2.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Doctrine\\Instantiator\\": "src/Doctrine/Instantiator/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                "name": "Marco Pivetta",
                "email": "ocramius@gmail.com",
                "homepage": "http://ocramius.github.com/"
            }],
            "description": "A small, lightweight utility to instantiate objects in PHP without invoking their constructors",
            "homepage": "https://www.doctrine-project.org/projects/instantiator.html",
            "keywords": [
                "constructor",
                "instantiate"
            ],
            "funding": [{
                    "url": "https://www.doctrine-project.org/sponsorship.html",
                    "type": "custom"
                },
                {
                    "url": "https://www.patreon.com/phpdoctrine",
                    "type": "patreon"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/doctrine%2Finstantiator",
                    "type": "tidelift"
                }
            ],
            "time": "2020-05-29T17:27:14+00:00"
        },
        {
            "name": "facade/flare-client-php",
            "version": "1.3.2",
            "source": {
                "type": "git",
                "url": "https://github.com/facade/flare-client-php.git",
                "reference": "db1e03426e7f9472c9ecd1092aff00f56aa6c004"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/facade/flare-client-php/zipball/db1e03426e7f9472c9ecd1092aff00f56aa6c004",
                "reference": "db1e03426e7f9472c9ecd1092aff00f56aa6c004",
                "shasum": ""
            },
            "require": {
                "facade/ignition-contracts": "~1.0",
                "illuminate/pipeline": "^5.5|^6.0|^7.0",
                "php": "^7.1",
                "symfony/http-foundation": "^3.3|^4.1|^5.0",
                "symfony/var-dumper": "^3.4|^4.0|^5.0"
            },
            "require-dev": {
                "larapack/dd": "^1.1",
                "phpunit/phpunit": "^7.5.16",
                "spatie/phpunit-snapshot-assertions": "^2.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.0-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Facade\\FlareClient\\": "src"
                },
                "files": [
                    "src/helpers.php"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "description": "Send PHP errors to Flare",
            "homepage": "https://github.com/facade/flare-client-php",
            "keywords": [
                "exception",
                "facade",
                "flare",
                "reporting"
            ],
            "funding": [{
                "url": "https://www.patreon.com/spatie",
                "type": "patreon"
            }],
            "time": "2020-03-02T15:52:04+00:00"
        },
        {
            "name": "facade/ignition",
            "version": "2.0.7",
            "source": {
                "type": "git",
                "url": "https://github.com/facade/ignition.git",
                "reference": "e6bedc1e74507d584fbcb041ebe0f7f215109cf2"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/facade/ignition/zipball/e6bedc1e74507d584fbcb041ebe0f7f215109cf2",
                "reference": "e6bedc1e74507d584fbcb041ebe0f7f215109cf2",
                "shasum": ""
            },
            "require": {
                "ext-json": "*",
                "ext-mbstring": "*",
                "facade/flare-client-php": "^1.0",
                "facade/ignition-contracts": "^1.0",
                "filp/whoops": "^2.4",
                "illuminate/support": "^7.0|^8.0",
                "monolog/monolog": "^2.0",
                "php": "^7.2.5",
                "scrivo/highlight.php": "^9.15",
                "symfony/console": "^5.0",
                "symfony/var-dumper": "^5.0"
            },
            "require-dev": {
                "friendsofphp/php-cs-fixer": "^2.14",
                "mockery/mockery": "^1.3",
                "orchestra/testbench": "5.0"
            },
            "suggest": {
                "laravel/telescope": "^3.1"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.x-dev"
                },
                "laravel": {
                    "providers": [
                        "Facade\\Ignition\\IgnitionServiceProvider"
                    ],
                    "aliases": {
                        "Flare": "Facade\\Ignition\\Facades\\Flare"
                    }
                }
            },
            "autoload": {
                "psr-4": {
                    "Facade\\Ignition\\": "src"
                },
                "files": [
                    "src/helpers.php"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "description": "A beautiful error page for Laravel applications.",
            "homepage": "https://github.com/facade/ignition",
            "keywords": [
                "error",
                "flare",
                "laravel",
                "page"
            ],
            "time": "2020-06-08T09:14:08+00:00"
        },
        {
            "name": "facade/ignition-contracts",
            "version": "1.0.0",
            "source": {
                "type": "git",
                "url": "https://github.com/facade/ignition-contracts.git",
                "reference": "f445db0fb86f48e205787b2592840dd9c80ded28"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/facade/ignition-contracts/zipball/f445db0fb86f48e205787b2592840dd9c80ded28",
                "reference": "f445db0fb86f48e205787b2592840dd9c80ded28",
                "shasum": ""
            },
            "require": {
                "php": "^7.1"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Facade\\IgnitionContracts\\": "src"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                "name": "Freek Van der Herten",
                "email": "freek@spatie.be",
                "homepage": "https://flareapp.io",
                "role": "Developer"
            }],
            "description": "Solution contracts for Ignition",
            "homepage": "https://github.com/facade/ignition-contracts",
            "keywords": [
                "contracts",
                "flare",
                "ignition"
            ],
            "time": "2019-08-30T14:06:08+00:00"
        },
        {
            "name": "filp/whoops",
            "version": "2.7.3",
            "source": {
                "type": "git",
                "url": "https://github.com/filp/whoops.git",
                "reference": "5d5fe9bb3d656b514d455645b3addc5f7ba7714d"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/filp/whoops/zipball/5d5fe9bb3d656b514d455645b3addc5f7ba7714d",
                "reference": "5d5fe9bb3d656b514d455645b3addc5f7ba7714d",
                "shasum": ""
            },
            "require": {
                "php": "^5.5.9 || ^7.0",
                "psr/log": "^1.0.1"
            },
            "require-dev": {
                "mockery/mockery": "^0.9 || ^1.0",
                "phpunit/phpunit": "^4.8.35 || ^5.7 || ^6.0",
                "symfony/var-dumper": "^2.6 || ^3.0 || ^4.0 || ^5.0"
            },
            "suggest": {
                "symfony/var-dumper": "Pretty print complex values better with var-dumper available",
                "whoops/soap": "Formats errors as SOAP responses"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.6-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Whoops\\": "src/Whoops/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                "name": "Filipe Dobreira",
                "homepage": "https://github.com/filp",
                "role": "Developer"
            }],
            "description": "php error handling for cool kids",
            "homepage": "https://filp.github.io/whoops/",
            "keywords": [
                "error",
                "exception",
                "handling",
                "library",
                "throwable",
                "whoops"
            ],
            "time": "2020-06-14T09:00:00+00:00"
        },
        {
            "name": "fzaninotto/faker",
            "version": "v1.9.1",
            "source": {
                "type": "git",
                "url": "https://github.com/fzaninotto/Faker.git",
                "reference": "fc10d778e4b84d5bd315dad194661e091d307c6f"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/fzaninotto/Faker/zipball/fc10d778e4b84d5bd315dad194661e091d307c6f",
                "reference": "fc10d778e4b84d5bd315dad194661e091d307c6f",
                "shasum": ""
            },
            "require": {
                "php": "^5.3.3 || ^7.0"
            },
            "require-dev": {
                "ext-intl": "*",
                "phpunit/phpunit": "^4.8.35 || ^5.7",
                "squizlabs/php_codesniffer": "^2.9.2"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.9-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Faker\\": "src/Faker/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                "name": "François Zaninotto"
            }],
            "description": "Faker is a PHP library that generates fake data for you.",
            "keywords": [
                "data",
                "faker",
                "fixtures"
            ],
            "time": "2019-12-12T13:22:17+00:00"
        },
        {
            "name": "hamcrest/hamcrest-php",
            "version": "v2.0.0",
            "source": {
                "type": "git",
                "url": "https://github.com/hamcrest/hamcrest-php.git",
                "reference": "776503d3a8e85d4f9a1148614f95b7a608b046ad"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/hamcrest/hamcrest-php/zipball/776503d3a8e85d4f9a1148614f95b7a608b046ad",
                "reference": "776503d3a8e85d4f9a1148614f95b7a608b046ad",
                "shasum": ""
            },
            "require": {
                "php": "^5.3|^7.0"
            },
            "replace": {
                "cordoval/hamcrest-php": "*",
                "davedevelopment/hamcrest-php": "*",
                "kodova/hamcrest-php": "*"
            },
            "require-dev": {
                "phpunit/php-file-iterator": "1.3.3",
                "phpunit/phpunit": "~4.0",
                "satooshi/php-coveralls": "^1.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.0-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "hamcrest"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD"
            ],
            "description": "This is the PHP port of Hamcrest Matchers",
            "keywords": [
                "test"
            ],
            "time": "2016-01-20T08:20:44+00:00"
        },
        {
            "name": "mockery/mockery",
            "version": "1.4.0",
            "source": {
                "type": "git",
                "url": "https://github.com/mockery/mockery.git",
                "reference": "6c6a7c533469873deacf998237e7649fc6b36223"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/mockery/mockery/zipball/6c6a7c533469873deacf998237e7649fc6b36223",
                "reference": "6c6a7c533469873deacf998237e7649fc6b36223",
                "shasum": ""
            },
            "require": {
                "hamcrest/hamcrest-php": "~2.0",
                "lib-pcre": ">=7.0",
                "php": "^7.3.0"
            },
            "conflict": {
                "phpunit/phpunit": "<8.0"
            },
            "require-dev": {
                "phpunit/phpunit": "^8.0.0 || ^9.0.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.4.x-dev"
                }
            },
            "autoload": {
                "psr-0": {
                    "Mockery": "library/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [{
                    "name": "Pádraic Brady",
                    "email": "padraic.brady@gmail.com",
                    "homepage": "http://blog.astrumfutura.com"
                },
                {
                    "name": "Dave Marshall",
                    "email": "dave.marshall@atstsolutions.co.uk",
                    "homepage": "http://davedevelopment.co.uk"
                }
            ],
            "description": "Mockery is a simple yet flexible PHP mock object framework",
            "homepage": "https://github.com/mockery/mockery",
            "keywords": [
                "BDD",
                "TDD",
                "library",
                "mock",
                "mock objects",
                "mockery",
                "stub",
                "test",
                "test double",
                "testing"
            ],
            "time": "2020-05-19T14:25:16+00:00"
        },
        {
            "name": "myclabs/deep-copy",
            "version": "1.9.5",
            "source": {
                "type": "git",
                "url": "https://github.com/myclabs/DeepCopy.git",
                "reference": "b2c28789e80a97badd14145fda39b545d83ca3ef"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/myclabs/DeepCopy/zipball/b2c28789e80a97badd14145fda39b545d83ca3ef",
                "reference": "b2c28789e80a97badd14145fda39b545d83ca3ef",
                "shasum": ""
            },
            "require": {
                "php": "^7.1"
            },
            "replace": {
                "myclabs/deep-copy": "self.version"
            },
            "require-dev": {
                "doctrine/collections": "^1.0",
                "doctrine/common": "^2.6",
                "phpunit/phpunit": "^7.1"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "DeepCopy\\": "src/DeepCopy/"
                },
                "files": [
                    "src/DeepCopy/deep_copy.php"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "description": "Create deep copies (clones) of your objects",
            "keywords": [
                "clone",
                "copy",
                "duplicate",
                "object",
                "object graph"
            ],
            "time": "2020-01-17T21:11:47+00:00"
        },
        {
            "name": "nunomaduro/collision",
            "version": "v4.2.0",
            "source": {
                "type": "git",
                "url": "https://github.com/nunomaduro/collision.git",
                "reference": "d50490417eded97be300a92cd7df7badc37a9018"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/nunomaduro/collision/zipball/d50490417eded97be300a92cd7df7badc37a9018",
                "reference": "d50490417eded97be300a92cd7df7badc37a9018",
                "shasum": ""
            },
            "require": {
                "facade/ignition-contracts": "^1.0",
                "filp/whoops": "^2.4",
                "php": "^7.2.5",
                "symfony/console": "^5.0"
            },
            "require-dev": {
                "facade/ignition": "^2.0",
                "fideloper/proxy": "^4.2",
                "friendsofphp/php-cs-fixer": "^2.16",
                "fruitcake/laravel-cors": "^1.0",
                "laravel/framework": "^7.0",
                "laravel/tinker": "^2.0",
                "nunomaduro/larastan": "^0.5",
                "orchestra/testbench": "^5.0",
                "phpstan/phpstan": "^0.12.3",
                "phpunit/phpunit": "^8.5.1 || ^9.0"
            },
            "type": "library",
            "extra": {
                "laravel": {
                    "providers": [
                        "NunoMaduro\\Collision\\Adapters\\Laravel\\CollisionServiceProvider"
                    ]
                }
            },
            "autoload": {
                "psr-4": {
                    "NunoMaduro\\Collision\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                "name": "Nuno Maduro",
                "email": "enunomaduro@gmail.com"
            }],
            "description": "Cli error handling for console/command-line PHP applications.",
            "keywords": [
                "artisan",
                "cli",
                "command-line",
                "console",
                "error",
                "handling",
                "laravel",
                "laravel-zero",
                "php",
                "symfony"
            ],
            "funding": [{
                    "url": "https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=66BYDWAT92N6L",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/nunomaduro",
                    "type": "github"
                },
                {
                    "url": "https://www.patreon.com/nunomaduro",
                    "type": "patreon"
                }
            ],
            "time": "2020-04-04T19:56:08+00:00"
        },
        {
            "name": "phar-io/manifest",
            "version": "1.0.3",
            "source": {
                "type": "git",
                "url": "https://github.com/phar-io/manifest.git",
                "reference": "7761fcacf03b4d4f16e7ccb606d4879ca431fcf4"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/phar-io/manifest/zipball/7761fcacf03b4d4f16e7ccb606d4879ca431fcf4",
                "reference": "7761fcacf03b4d4f16e7ccb606d4879ca431fcf4",
                "shasum": ""
            },
            "require": {
                "ext-dom": "*",
                "ext-phar": "*",
                "phar-io/version": "^2.0",
                "php": "^5.6 || ^7.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.0.x-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [{
                    "name": "Arne Blankerts",
                    "email": "arne@blankerts.de",
                    "role": "Developer"
                },
                {
                    "name": "Sebastian Heuer",
                    "email": "sebastian@phpeople.de",
                    "role": "Developer"
                },
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de",
                    "role": "Developer"
                }
            ],
            "description": "Component for reading phar.io manifest information from a PHP Archive (PHAR)",
            "time": "2018-07-08T19:23:20+00:00"
        },
        {
            "name": "phar-io/version",
            "version": "2.0.1",
            "source": {
                "type": "git",
                "url": "https://github.com/phar-io/version.git",
                "reference": "45a2ec53a73c70ce41d55cedef9063630abaf1b6"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/phar-io/version/zipball/45a2ec53a73c70ce41d55cedef9063630abaf1b6",
                "reference": "45a2ec53a73c70ce41d55cedef9063630abaf1b6",
                "shasum": ""
            },
            "require": {
                "php": "^5.6 || ^7.0"
            },
            "type": "library",
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [{
                    "name": "Arne Blankerts",
                    "email": "arne@blankerts.de",
                    "role": "Developer"
                },
                {
                    "name": "Sebastian Heuer",
                    "email": "sebastian@phpeople.de",
                    "role": "Developer"
                },
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de",
                    "role": "Developer"
                }
            ],
            "description": "Library for handling version information and constraints",
            "time": "2018-07-08T19:19:57+00:00"
        },
        {
            "name": "phpdocumentor/reflection-common",
            "version": "2.1.0",
            "source": {
                "type": "git",
                "url": "https://github.com/phpDocumentor/ReflectionCommon.git",
                "reference": "6568f4687e5b41b054365f9ae03fcb1ed5f2069b"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/phpDocumentor/ReflectionCommon/zipball/6568f4687e5b41b054365f9ae03fcb1ed5f2069b",
                "reference": "6568f4687e5b41b054365f9ae03fcb1ed5f2069b",
                "shasum": ""
            },
            "require": {
                "php": ">=7.1"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "phpDocumentor\\Reflection\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                "name": "Jaap van Otterdijk",
                "email": "opensource@ijaap.nl"
            }],
            "description": "Common reflection classes used by phpdocumentor to reflect the code structure",
            "homepage": "http://www.phpdoc.org",
            "keywords": [
                "FQSEN",
                "phpDocumentor",
                "phpdoc",
                "reflection",
                "static analysis"
            ],
            "time": "2020-04-27T09:25:28+00:00"
        },
        {
            "name": "phpdocumentor/reflection-docblock",
            "version": "5.1.0",
            "source": {
                "type": "git",
                "url": "https://github.com/phpDocumentor/ReflectionDocBlock.git",
                "reference": "cd72d394ca794d3466a3b2fc09d5a6c1dc86b47e"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/phpDocumentor/ReflectionDocBlock/zipball/cd72d394ca794d3466a3b2fc09d5a6c1dc86b47e",
                "reference": "cd72d394ca794d3466a3b2fc09d5a6c1dc86b47e",
                "shasum": ""
            },
            "require": {
                "ext-filter": "^7.1",
                "php": "^7.2",
                "phpdocumentor/reflection-common": "^2.0",
                "phpdocumentor/type-resolver": "^1.0",
                "webmozart/assert": "^1"
            },
            "require-dev": {
                "doctrine/instantiator": "^1",
                "mockery/mockery": "^1"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "5.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "phpDocumentor\\Reflection\\": "src"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                    "name": "Mike van Riel",
                    "email": "me@mikevanriel.com"
                },
                {
                    "name": "Jaap van Otterdijk",
                    "email": "account@ijaap.nl"
                }
            ],
            "description": "With this component, a library can provide support for annotations via DocBlocks or otherwise retrieve information that is embedded in a DocBlock.",
            "time": "2020-02-22T12:28:44+00:00"
        },
        {
            "name": "phpdocumentor/type-resolver",
            "version": "1.2.0",
            "source": {
                "type": "git",
                "url": "https://github.com/phpDocumentor/TypeResolver.git",
                "reference": "30441f2752e493c639526b215ed81d54f369d693"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/phpDocumentor/TypeResolver/zipball/30441f2752e493c639526b215ed81d54f369d693",
                "reference": "30441f2752e493c639526b215ed81d54f369d693",
                "shasum": ""
            },
            "require": {
                "php": "^7.2",
                "phpdocumentor/reflection-common": "^2.0"
            },
            "require-dev": {
                "ext-tokenizer": "^7.2",
                "mockery/mockery": "~1"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-1.x": "1.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "phpDocumentor\\Reflection\\": "src"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                "name": "Mike van Riel",
                "email": "me@mikevanriel.com"
            }],
            "description": "A PSR-5 based resolver of Class names, Types and Structural Element Names",
            "time": "2020-06-19T20:22:09+00:00"
        },
        {
            "name": "phpspec/prophecy",
            "version": "v1.10.3",
            "source": {
                "type": "git",
                "url": "https://github.com/phpspec/prophecy.git",
                "reference": "451c3cd1418cf640de218914901e51b064abb093"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/phpspec/prophecy/zipball/451c3cd1418cf640de218914901e51b064abb093",
                "reference": "451c3cd1418cf640de218914901e51b064abb093",
                "shasum": ""
            },
            "require": {
                "doctrine/instantiator": "^1.0.2",
                "php": "^5.3|^7.0",
                "phpdocumentor/reflection-docblock": "^2.0|^3.0.2|^4.0|^5.0",
                "sebastian/comparator": "^1.2.3|^2.0|^3.0|^4.0",
                "sebastian/recursion-context": "^1.0|^2.0|^3.0|^4.0"
            },
            "require-dev": {
                "phpspec/phpspec": "^2.5 || ^3.2",
                "phpunit/phpunit": "^4.8.35 || ^5.7 || ^6.5 || ^7.1"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.10.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Prophecy\\": "src/Prophecy"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                    "name": "Konstantin Kudryashov",
                    "email": "ever.zet@gmail.com",
                    "homepage": "http://everzet.com"
                },
                {
                    "name": "Marcello Duarte",
                    "email": "marcello.duarte@gmail.com"
                }
            ],
            "description": "Highly opinionated mocking framework for PHP 5.3+",
            "homepage": "https://github.com/phpspec/prophecy",
            "keywords": [
                "Double",
                "Dummy",
                "fake",
                "mock",
                "spy",
                "stub"
            ],
            "time": "2020-03-05T15:02:03+00:00"
        },
        {
            "name": "phpunit/php-code-coverage",
            "version": "7.0.10",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/php-code-coverage.git",
                "reference": "f1884187926fbb755a9aaf0b3836ad3165b478bf"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/php-code-coverage/zipball/f1884187926fbb755a9aaf0b3836ad3165b478bf",
                "reference": "f1884187926fbb755a9aaf0b3836ad3165b478bf",
                "shasum": ""
            },
            "require": {
                "ext-dom": "*",
                "ext-xmlwriter": "*",
                "php": "^7.2",
                "phpunit/php-file-iterator": "^2.0.2",
                "phpunit/php-text-template": "^1.2.1",
                "phpunit/php-token-stream": "^3.1.1",
                "sebastian/code-unit-reverse-lookup": "^1.0.1",
                "sebastian/environment": "^4.2.2",
                "sebastian/version": "^2.0.1",
                "theseer/tokenizer": "^1.1.3"
            },
            "require-dev": {
                "phpunit/phpunit": "^8.2.2"
            },
            "suggest": {
                "ext-xdebug": "^2.7.2"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "7.0-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [{
                "name": "Sebastian Bergmann",
                "email": "sebastian@phpunit.de",
                "role": "lead"
            }],
            "description": "Library that provides collection, processing, and rendering functionality for PHP code coverage information.",
            "homepage": "https://github.com/sebastianbergmann/php-code-coverage",
            "keywords": [
                "coverage",
                "testing",
                "xunit"
            ],
            "time": "2019-11-20T13:55:58+00:00"
        },
        {
            "name": "phpunit/php-file-iterator",
            "version": "2.0.2",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/php-file-iterator.git",
                "reference": "050bedf145a257b1ff02746c31894800e5122946"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/php-file-iterator/zipball/050bedf145a257b1ff02746c31894800e5122946",
                "reference": "050bedf145a257b1ff02746c31894800e5122946",
                "shasum": ""
            },
            "require": {
                "php": "^7.1"
            },
            "require-dev": {
                "phpunit/phpunit": "^7.1"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.0.x-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [{
                "name": "Sebastian Bergmann",
                "email": "sebastian@phpunit.de",
                "role": "lead"
            }],
            "description": "FilterIterator implementation that filters files based on a list of suffixes.",
            "homepage": "https://github.com/sebastianbergmann/php-file-iterator/",
            "keywords": [
                "filesystem",
                "iterator"
            ],
            "time": "2018-09-13T20:33:42+00:00"
        },
        {
            "name": "phpunit/php-text-template",
            "version": "1.2.1",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/php-text-template.git",
                "reference": "31f8b717e51d9a2afca6c9f046f5d69fc27c8686"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/php-text-template/zipball/31f8b717e51d9a2afca6c9f046f5d69fc27c8686",
                "reference": "31f8b717e51d9a2afca6c9f046f5d69fc27c8686",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.3"
            },
            "type": "library",
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [{
                "name": "Sebastian Bergmann",
                "email": "sebastian@phpunit.de",
                "role": "lead"
            }],
            "description": "Simple template engine.",
            "homepage": "https://github.com/sebastianbergmann/php-text-template/",
            "keywords": [
                "template"
            ],
            "time": "2015-06-21T13:50:34+00:00"
        },
        {
            "name": "phpunit/php-timer",
            "version": "2.1.2",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/php-timer.git",
                "reference": "1038454804406b0b5f5f520358e78c1c2f71501e"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/php-timer/zipball/1038454804406b0b5f5f520358e78c1c2f71501e",
                "reference": "1038454804406b0b5f5f520358e78c1c2f71501e",
                "shasum": ""
            },
            "require": {
                "php": "^7.1"
            },
            "require-dev": {
                "phpunit/phpunit": "^7.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.1-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [{
                "name": "Sebastian Bergmann",
                "email": "sebastian@phpunit.de",
                "role": "lead"
            }],
            "description": "Utility class for timing",
            "homepage": "https://github.com/sebastianbergmann/php-timer/",
            "keywords": [
                "timer"
            ],
            "time": "2019-06-07T04:22:29+00:00"
        },
        {
            "name": "phpunit/php-token-stream",
            "version": "3.1.1",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/php-token-stream.git",
                "reference": "995192df77f63a59e47f025390d2d1fdf8f425ff"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/php-token-stream/zipball/995192df77f63a59e47f025390d2d1fdf8f425ff",
                "reference": "995192df77f63a59e47f025390d2d1fdf8f425ff",
                "shasum": ""
            },
            "require": {
                "ext-tokenizer": "*",
                "php": "^7.1"
            },
            "require-dev": {
                "phpunit/phpunit": "^7.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "3.1-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [{
                "name": "Sebastian Bergmann",
                "email": "sebastian@phpunit.de"
            }],
            "description": "Wrapper around PHP's tokenizer extension.",
            "homepage": "https://github.com/sebastianbergmann/php-token-stream/",
            "keywords": [
                "tokenizer"
            ],
            "time": "2019-09-17T06:23:10+00:00"
        },
        {
            "name": "phpunit/phpunit",
            "version": "8.5.8",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/phpunit.git",
                "reference": "34c18baa6a44f1d1fbf0338907139e9dce95b997"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/phpunit/zipball/34c18baa6a44f1d1fbf0338907139e9dce95b997",
                "reference": "34c18baa6a44f1d1fbf0338907139e9dce95b997",
                "shasum": ""
            },
            "require": {
                "doctrine/instantiator": "^1.2.0",
                "ext-dom": "*",
                "ext-json": "*",
                "ext-libxml": "*",
                "ext-mbstring": "*",
                "ext-xml": "*",
                "ext-xmlwriter": "*",
                "myclabs/deep-copy": "^1.9.1",
                "phar-io/manifest": "^1.0.3",
                "phar-io/version": "^2.0.1",
                "php": "^7.2",
                "phpspec/prophecy": "^1.8.1",
                "phpunit/php-code-coverage": "^7.0.7",
                "phpunit/php-file-iterator": "^2.0.2",
                "phpunit/php-text-template": "^1.2.1",
                "phpunit/php-timer": "^2.1.2",
                "sebastian/comparator": "^3.0.2",
                "sebastian/diff": "^3.0.2",
                "sebastian/environment": "^4.2.2",
                "sebastian/exporter": "^3.1.1",
                "sebastian/global-state": "^3.0.0",
                "sebastian/object-enumerator": "^3.0.3",
                "sebastian/resource-operations": "^2.0.1",
                "sebastian/type": "^1.1.3",
                "sebastian/version": "^2.0.1"
            },
            "require-dev": {
                "ext-pdo": "*"
            },
            "suggest": {
                "ext-soap": "*",
                "ext-xdebug": "*",
                "phpunit/php-invoker": "^2.0.0"
            },
            "bin": [
                "phpunit"
            ],
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "8.5-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [{
                "name": "Sebastian Bergmann",
                "email": "sebastian@phpunit.de",
                "role": "lead"
            }],
            "description": "The PHP Unit Testing framework.",
            "homepage": "https://phpunit.de/",
            "keywords": [
                "phpunit",
                "testing",
                "xunit"
            ],
            "funding": [{
                    "url": "https://phpunit.de/donate.html",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/sebastianbergmann",
                    "type": "github"
                }
            ],
            "time": "2020-06-22T07:06:58+00:00"
        },
        {
            "name": "scrivo/highlight.php",
            "version": "v9.18.1.1",
            "source": {
                "type": "git",
                "url": "https://github.com/scrivo/highlight.php.git",
                "reference": "52fc21c99fd888e33aed4879e55a3646f8d40558"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/scrivo/highlight.php/zipball/52fc21c99fd888e33aed4879e55a3646f8d40558",
                "reference": "52fc21c99fd888e33aed4879e55a3646f8d40558",
                "shasum": ""
            },
            "require": {
                "ext-json": "*",
                "ext-mbstring": "*",
                "php": ">=5.4"
            },
            "require-dev": {
                "phpunit/phpunit": "^4.8|^5.7",
                "sabberworm/php-css-parser": "^8.3",
                "symfony/finder": "^2.8|^3.4",
                "symfony/var-dumper": "^2.8|^3.4"
            },
            "suggest": {
                "ext-dom": "Needed to make use of the features in the utilities namespace"
            },
            "type": "library",
            "autoload": {
                "psr-0": {
                    "Highlight\\": "",
                    "HighlightUtilities\\": ""
                },
                "files": [
                    "HighlightUtilities/functions.php"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [{
                    "name": "Geert Bergman",
                    "homepage": "http://www.scrivo.org/",
                    "role": "Project Author"
                },
                {
                    "name": "Vladimir Jimenez",
                    "homepage": "https://allejo.io",
                    "role": "Maintainer"
                },
                {
                    "name": "Martin Folkers",
                    "homepage": "https://twobrain.io",
                    "role": "Contributor"
                }
            ],
            "description": "Server side syntax highlighter that supports 185 languages. It's a PHP port of highlight.js",
            "keywords": [
                "code",
                "highlight",
                "highlight.js",
                "highlight.php",
                "syntax"
            ],
            "funding": [{
                "url": "https://github.com/allejo",
                "type": "github"
            }],
            "time": "2020-03-02T05:59:21+00:00"
        },
        {
            "name": "sebastian/code-unit-reverse-lookup",
            "version": "1.0.1",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/code-unit-reverse-lookup.git",
                "reference": "4419fcdb5eabb9caa61a27c7a1db532a6b55dd18"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/code-unit-reverse-lookup/zipball/4419fcdb5eabb9caa61a27c7a1db532a6b55dd18",
                "reference": "4419fcdb5eabb9caa61a27c7a1db532a6b55dd18",
                "shasum": ""
            },
            "require": {
                "php": "^5.6 || ^7.0"
            },
            "require-dev": {
                "phpunit/phpunit": "^5.7 || ^6.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.0.x-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [{
                "name": "Sebastian Bergmann",
                "email": "sebastian@phpunit.de"
            }],
            "description": "Looks up which function or method a line of code belongs to",
            "homepage": "https://github.com/sebastianbergmann/code-unit-reverse-lookup/",
            "time": "2017-03-04T06:30:41+00:00"
        },
        {
            "name": "sebastian/comparator",
            "version": "3.0.2",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/comparator.git",
                "reference": "5de4fc177adf9bce8df98d8d141a7559d7ccf6da"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/comparator/zipball/5de4fc177adf9bce8df98d8d141a7559d7ccf6da",
                "reference": "5de4fc177adf9bce8df98d8d141a7559d7ccf6da",
                "shasum": ""
            },
            "require": {
                "php": "^7.1",
                "sebastian/diff": "^3.0",
                "sebastian/exporter": "^3.1"
            },
            "require-dev": {
                "phpunit/phpunit": "^7.1"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "3.0-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [{
                    "name": "Jeff Welch",
                    "email": "whatthejeff@gmail.com"
                },
                {
                    "name": "Volker Dusch",
                    "email": "github@wallbash.com"
                },
                {
                    "name": "Bernhard Schussek",
                    "email": "bschussek@2bepublished.at"
                },
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de"
                }
            ],
            "description": "Provides the functionality to compare PHP values for equality",
            "homepage": "https://github.com/sebastianbergmann/comparator",
            "keywords": [
                "comparator",
                "compare",
                "equality"
            ],
            "time": "2018-07-12T15:12:46+00:00"
        },
        {
            "name": "sebastian/diff",
            "version": "3.0.2",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/diff.git",
                "reference": "720fcc7e9b5cf384ea68d9d930d480907a0c1a29"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/diff/zipball/720fcc7e9b5cf384ea68d9d930d480907a0c1a29",
                "reference": "720fcc7e9b5cf384ea68d9d930d480907a0c1a29",
                "shasum": ""
            },
            "require": {
                "php": "^7.1"
            },
            "require-dev": {
                "phpunit/phpunit": "^7.5 || ^8.0",
                "symfony/process": "^2 || ^3.3 || ^4"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "3.0-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [{
                    "name": "Kore Nordmann",
                    "email": "mail@kore-nordmann.de"
                },
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de"
                }
            ],
            "description": "Diff implementation",
            "homepage": "https://github.com/sebastianbergmann/diff",
            "keywords": [
                "diff",
                "udiff",
                "unidiff",
                "unified diff"
            ],
            "time": "2019-02-04T06:01:07+00:00"
        },
        {
            "name": "sebastian/environment",
            "version": "4.2.3",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/environment.git",
                "reference": "464c90d7bdf5ad4e8a6aea15c091fec0603d4368"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/environment/zipball/464c90d7bdf5ad4e8a6aea15c091fec0603d4368",
                "reference": "464c90d7bdf5ad4e8a6aea15c091fec0603d4368",
                "shasum": ""
            },
            "require": {
                "php": "^7.1"
            },
            "require-dev": {
                "phpunit/phpunit": "^7.5"
            },
            "suggest": {
                "ext-posix": "*"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "4.2-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [{
                "name": "Sebastian Bergmann",
                "email": "sebastian@phpunit.de"
            }],
            "description": "Provides functionality to handle HHVM/PHP environments",
            "homepage": "http://www.github.com/sebastianbergmann/environment",
            "keywords": [
                "Xdebug",
                "environment",
                "hhvm"
            ],
            "time": "2019-11-20T08:46:58+00:00"
        },
        {
            "name": "sebastian/exporter",
            "version": "3.1.2",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/exporter.git",
                "reference": "68609e1261d215ea5b21b7987539cbfbe156ec3e"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/exporter/zipball/68609e1261d215ea5b21b7987539cbfbe156ec3e",
                "reference": "68609e1261d215ea5b21b7987539cbfbe156ec3e",
                "shasum": ""
            },
            "require": {
                "php": "^7.0",
                "sebastian/recursion-context": "^3.0"
            },
            "require-dev": {
                "ext-mbstring": "*",
                "phpunit/phpunit": "^6.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "3.1.x-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [{
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de"
                },
                {
                    "name": "Jeff Welch",
                    "email": "whatthejeff@gmail.com"
                },
                {
                    "name": "Volker Dusch",
                    "email": "github@wallbash.com"
                },
                {
                    "name": "Adam Harvey",
                    "email": "aharvey@php.net"
                },
                {
                    "name": "Bernhard Schussek",
                    "email": "bschussek@gmail.com"
                }
            ],
            "description": "Provides the functionality to export PHP variables for visualization",
            "homepage": "http://www.github.com/sebastianbergmann/exporter",
            "keywords": [
                "export",
                "exporter"
            ],
            "time": "2019-09-14T09:02:43+00:00"
        },
        {
            "name": "sebastian/global-state",
            "version": "3.0.0",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/global-state.git",
                "reference": "edf8a461cf1d4005f19fb0b6b8b95a9f7fa0adc4"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/global-state/zipball/edf8a461cf1d4005f19fb0b6b8b95a9f7fa0adc4",
                "reference": "edf8a461cf1d4005f19fb0b6b8b95a9f7fa0adc4",
                "shasum": ""
            },
            "require": {
                "php": "^7.2",
                "sebastian/object-reflector": "^1.1.1",
                "sebastian/recursion-context": "^3.0"
            },
            "require-dev": {
                "ext-dom": "*",
                "phpunit/phpunit": "^8.0"
            },
            "suggest": {
                "ext-uopz": "*"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "3.0-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [{
                "name": "Sebastian Bergmann",
                "email": "sebastian@phpunit.de"
            }],
            "description": "Snapshotting of global state",
            "homepage": "http://www.github.com/sebastianbergmann/global-state",
            "keywords": [
                "global state"
            ],
            "time": "2019-02-01T05:30:01+00:00"
        },
        {
            "name": "sebastian/object-enumerator",
            "version": "3.0.3",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/object-enumerator.git",
                "reference": "7cfd9e65d11ffb5af41198476395774d4c8a84c5"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/object-enumerator/zipball/7cfd9e65d11ffb5af41198476395774d4c8a84c5",
                "reference": "7cfd9e65d11ffb5af41198476395774d4c8a84c5",
                "shasum": ""
            },
            "require": {
                "php": "^7.0",
                "sebastian/object-reflector": "^1.1.1",
                "sebastian/recursion-context": "^3.0"
            },
            "require-dev": {
                "phpunit/phpunit": "^6.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "3.0.x-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [{
                "name": "Sebastian Bergmann",
                "email": "sebastian@phpunit.de"
            }],
            "description": "Traverses array structures and object graphs to enumerate all referenced objects",
            "homepage": "https://github.com/sebastianbergmann/object-enumerator/",
            "time": "2017-08-03T12:35:26+00:00"
        },
        {
            "name": "sebastian/object-reflector",
            "version": "1.1.1",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/object-reflector.git",
                "reference": "773f97c67f28de00d397be301821b06708fca0be"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/object-reflector/zipball/773f97c67f28de00d397be301821b06708fca0be",
                "reference": "773f97c67f28de00d397be301821b06708fca0be",
                "shasum": ""
            },
            "require": {
                "php": "^7.0"
            },
            "require-dev": {
                "phpunit/phpunit": "^6.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.1-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [{
                "name": "Sebastian Bergmann",
                "email": "sebastian@phpunit.de"
            }],
            "description": "Allows reflection of object attributes, including inherited and non-public ones",
            "homepage": "https://github.com/sebastianbergmann/object-reflector/",
            "time": "2017-03-29T09:07:27+00:00"
        },
        {
            "name": "sebastian/recursion-context",
            "version": "3.0.0",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/recursion-context.git",
                "reference": "5b0cd723502bac3b006cbf3dbf7a1e3fcefe4fa8"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/recursion-context/zipball/5b0cd723502bac3b006cbf3dbf7a1e3fcefe4fa8",
                "reference": "5b0cd723502bac3b006cbf3dbf7a1e3fcefe4fa8",
                "shasum": ""
            },
            "require": {
                "php": "^7.0"
            },
            "require-dev": {
                "phpunit/phpunit": "^6.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "3.0.x-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [{
                    "name": "Jeff Welch",
                    "email": "whatthejeff@gmail.com"
                },
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de"
                },
                {
                    "name": "Adam Harvey",
                    "email": "aharvey@php.net"
                }
            ],
            "description": "Provides functionality to recursively process PHP variables",
            "homepage": "http://www.github.com/sebastianbergmann/recursion-context",
            "time": "2017-03-03T06:23:57+00:00"
        },
        {
            "name": "sebastian/resource-operations",
            "version": "2.0.1",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/resource-operations.git",
                "reference": "4d7a795d35b889bf80a0cc04e08d77cedfa917a9"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/resource-operations/zipball/4d7a795d35b889bf80a0cc04e08d77cedfa917a9",
                "reference": "4d7a795d35b889bf80a0cc04e08d77cedfa917a9",
                "shasum": ""
            },
            "require": {
                "php": "^7.1"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.0-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [{
                "name": "Sebastian Bergmann",
                "email": "sebastian@phpunit.de"
            }],
            "description": "Provides a list of PHP built-in functions that operate on resources",
            "homepage": "https://www.github.com/sebastianbergmann/resource-operations",
            "time": "2018-10-04T04:07:39+00:00"
        },
        {
            "name": "sebastian/type",
            "version": "1.1.3",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/type.git",
                "reference": "3aaaa15fa71d27650d62a948be022fe3b48541a3"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/type/zipball/3aaaa15fa71d27650d62a948be022fe3b48541a3",
                "reference": "3aaaa15fa71d27650d62a948be022fe3b48541a3",
                "shasum": ""
            },
            "require": {
                "php": "^7.2"
            },
            "require-dev": {
                "phpunit/phpunit": "^8.2"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.1-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [{
                "name": "Sebastian Bergmann",
                "email": "sebastian@phpunit.de",
                "role": "lead"
            }],
            "description": "Collection of value objects that represent the types of the PHP type system",
            "homepage": "https://github.com/sebastianbergmann/type",
            "time": "2019-07-02T08:10:15+00:00"
        },
        {
            "name": "sebastian/version",
            "version": "2.0.1",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/version.git",
                "reference": "99732be0ddb3361e16ad77b68ba41efc8e979019"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/version/zipball/99732be0ddb3361e16ad77b68ba41efc8e979019",
                "reference": "99732be0ddb3361e16ad77b68ba41efc8e979019",
                "shasum": ""
            },
            "require": {
                "php": ">=5.6"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.0.x-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [{
                "name": "Sebastian Bergmann",
                "email": "sebastian@phpunit.de",
                "role": "lead"
            }],
            "description": "Library that helps with managing the version number of Git-hosted PHP projects",
            "homepage": "https://github.com/sebastianbergmann/version",
            "time": "2016-10-03T07:35:21+00:00"
        },
        {
            "name": "theseer/tokenizer",
            "version": "1.1.3",
            "source": {
                "type": "git",
                "url": "https://github.com/theseer/tokenizer.git",
                "reference": "11336f6f84e16a720dae9d8e6ed5019efa85a0f9"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/theseer/tokenizer/zipball/11336f6f84e16a720dae9d8e6ed5019efa85a0f9",
                "reference": "11336f6f84e16a720dae9d8e6ed5019efa85a0f9",
                "shasum": ""
            },
            "require": {
                "ext-dom": "*",
                "ext-tokenizer": "*",
                "ext-xmlwriter": "*",
                "php": "^7.0"
            },
            "type": "library",
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [{
                "name": "Arne Blankerts",
                "email": "arne@blankerts.de",
                "role": "Developer"
            }],
            "description": "A small library for converting tokenized PHP source code into XML and potentially other formats",
            "time": "2019-06-13T22:48:21+00:00"
        },
        {
            "name": "webmozart/assert",
            "version": "1.9.0",
            "source": {
                "type": "git",
                "url": "https://github.com/webmozart/assert.git",
                "reference": "9dc4f203e36f2b486149058bade43c851dd97451"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/webmozart/assert/zipball/9dc4f203e36f2b486149058bade43c851dd97451",
                "reference": "9dc4f203e36f2b486149058bade43c851dd97451",
                "shasum": ""
            },
            "require": {
                "php": "^5.3.3 || ^7.0",
                "symfony/polyfill-ctype": "^1.8"
            },
            "conflict": {
                "phpstan/phpstan": "<0.12.20",
                "vimeo/psalm": "<3.9.1"
            },
            "require-dev": {
                "phpunit/phpunit": "^4.8.36 || ^7.5.13"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Webmozart\\Assert\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [{
                "name": "Bernhard Schussek",
                "email": "bschussek@gmail.com"
            }],
            "description": "Assertions to validate method input/output with nice error messages.",
            "keywords": [
                "assert",
                "check",
                "validate"
            ],
            "time": "2020-06-16T10:16:42+00:00"
        }
    ],
    "aliases": [],
    "minimum-stability": "dev",
    "stability-flags": [],
    "prefer-stable": true,
    "prefer-lowest": false,
    "platform": {
        "php": "^7.2.5"
    },
    "platform-dev": [],
    "plugin-api-version": "1.1.0"
}