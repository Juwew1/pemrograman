<<<<<<< HEAD
# Install script for directory: E:/Documents/pemrograman/ProyekBesar/yasir/AplikasiKasirSederhana
=======
# Install script for directory: D:/pemrograman/ProyekBesar/yasir/AplikasiKasirSederhana
>>>>>>> d1680f1f8679de5acb190e9e321d5c555a6f3f1e

# Set the install prefix
if(NOT DEFINED CMAKE_INSTALL_PREFIX)
  set(CMAKE_INSTALL_PREFIX "C:/Program Files (x86)/AplikasiKasirSederhana")
endif()
string(REGEX REPLACE "/$" "" CMAKE_INSTALL_PREFIX "${CMAKE_INSTALL_PREFIX}")

# Set the install configuration name.
if(NOT DEFINED CMAKE_INSTALL_CONFIG_NAME)
  if(BUILD_TYPE)
    string(REGEX REPLACE "^[^A-Za-z0-9_]+" ""
           CMAKE_INSTALL_CONFIG_NAME "${BUILD_TYPE}")
  else()
    set(CMAKE_INSTALL_CONFIG_NAME "Debug")
  endif()
  message(STATUS "Install configuration: \"${CMAKE_INSTALL_CONFIG_NAME}\"")
endif()

# Set the component getting installed.
if(NOT CMAKE_INSTALL_COMPONENT)
  if(COMPONENT)
    message(STATUS "Install component: \"${COMPONENT}\"")
    set(CMAKE_INSTALL_COMPONENT "${COMPONENT}")
  else()
    set(CMAKE_INSTALL_COMPONENT)
  endif()
endif()

# Is this installation the result of a crosscompile?
if(NOT DEFINED CMAKE_CROSSCOMPILING)
  set(CMAKE_CROSSCOMPILING "FALSE")
endif()

# Set default install directory permissions.
if(NOT DEFINED CMAKE_OBJDUMP)
<<<<<<< HEAD
  set(CMAKE_OBJDUMP "D:/program installer/JetbrainsToolbox/Programs/CLion/bin/mingw/bin/objdump.exe")
=======
  set(CMAKE_OBJDUMP "C:/Users/aibnu/AppData/Local/Programs/CLion/bin/mingw/bin/objdump.exe")
>>>>>>> d1680f1f8679de5acb190e9e321d5c555a6f3f1e
endif()

if(CMAKE_INSTALL_COMPONENT)
  set(CMAKE_INSTALL_MANIFEST "install_manifest_${CMAKE_INSTALL_COMPONENT}.txt")
else()
  set(CMAKE_INSTALL_MANIFEST "install_manifest.txt")
endif()

string(REPLACE ";" "\n" CMAKE_INSTALL_MANIFEST_CONTENT
       "${CMAKE_INSTALL_MANIFEST_FILES}")
<<<<<<< HEAD
file(WRITE "E:/Documents/pemrograman/ProyekBesar/yasir/AplikasiKasirSederhana/cmake-build-debug/${CMAKE_INSTALL_MANIFEST}"
=======
file(WRITE "D:/pemrograman/ProyekBesar/yasir/AplikasiKasirSederhana/cmake-build-debug/${CMAKE_INSTALL_MANIFEST}"
>>>>>>> d1680f1f8679de5acb190e9e321d5c555a6f3f1e
     "${CMAKE_INSTALL_MANIFEST_CONTENT}")
