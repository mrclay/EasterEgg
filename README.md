# Easter Egg

This is a mini app to embed a secret "easter egg" in a web page. ([screenshot](https://github.com/mrclay/EasterEgg/blob/master/screenshot.jpg))

The default egg is a "Great Job, Everybody!" message with a gross piece of pizza and brownie that slides down from off-screen. This is super appropriate for congratulating your team on another generic accomplishment!

## Requirements

 * Server: PHP 5.2
 * Browser: Support for IMG with data-URLs

## Installation

The `public/index.php` PHP script outputs Javascript, and the egg is displayed when this script is executed in the browser.

 1. Make the `public` directory available in your Document Root.
 1. See the script elements in `demo.html` to see some ways to trigger the egg.

## TODO

 * Make the egg more obnoxious: cycling rainbow letters, more absurd images
 * Make it so you can adjust the message without fiddling with CSS

### License

Copyright (c) 2011, [Stephen Clay](http://www.mrclay.org/) and other collaborators
All rights reserved.

Redistribution and use in source and binary forms, with or without
modification, are permitted provided that the following conditions are met:

 * Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.
 * Neither the name Stephen Clay nor the names of his contributors may be used to endorse or promote products derived from this software without specific prior written permission.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
DISCLAIMED. IN NO EVENT SHALL THE AFOREMENTIONED PARTIES BE LIABLE FOR ANY
DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
(INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
(INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.