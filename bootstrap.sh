#!/bin/sh

set -x

aclocal -I m4
autopoint
autoconf
autoheader
automake --add-missing --copy --foreign
