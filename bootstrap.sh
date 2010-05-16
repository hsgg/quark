#!/bin/sh

set -x

aclocal -I m4
autoconf
autoheader
automake --add-missing --copy --foreign
