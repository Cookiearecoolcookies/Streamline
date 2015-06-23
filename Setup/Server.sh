#!/bin/sh
sudo apt-get update
sudo apt-get dist-upgrade
wget http://ubuntu.bigbluebutton.org/bigbluebutton.asc -O- | sudo apt-key add -
echo "deb http://ubuntu.bigbluebutton.org/trusty-090/ bigbluebutton-trusty main" | sudo tee /etc/apt/sources.list.d/bigbluebutton.list
sudo apt-get update
touch install-ffmpeg.sh
sudo apt-get install build-essential git-core checkinstall yasm texi2html libvorbis-dev libx11-dev echo 'libvpx-dev libxfixes-dev zlib1g-dev pkg-config netcat libncurses5-dev

FFMPEG_VERSION=2.3.3

cd /usr/local/src
if [ ! -d "/usr/local/src/ffmpeg-${FFMPEG_VERSION}" ]; then
  sudo wget "http://ffmpeg.org/releases/ffmpeg-${FFMPEG_VERSION}.tar.bz2"
  sudo tar -xjf "ffmpeg-${FFMPEG_VERSION}.tar.bz2"
fi

cd "ffmpeg-${FFMPEG_VERSION}"
sudo ./configure --enable-version3 --enable-postproc --enable-libvorbis --enable-libvpx
sudo make
sudo checkinstall --pkgname=ffmpeg --pkgversion="5:${FFMPEG_VERSION}" --backup=no --deldoc=yes --default' >> install-ffmpeg.sh
chmod +x install-ffmpeg.sh
sudo ./install-ffmpeg.sh
ffmpeg -version



