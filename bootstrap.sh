#!/bin/sh

set -x

aclocal-1.11 -I m4
autoconf
autoheader
automake --add-missing --copy --foreign
