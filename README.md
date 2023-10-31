# RTMP-Stream-Control-Panel
A web-based control panel for managing RTMP streams on an Nginx server.
Note: The project is still under development.
This GitHub repository contains a web-based interface for controlling RTMP (Real-Time Messaging Protocol) streams on an Nginx server.
Users can use this interface to enable or disable RTMP streams dynamically.

## Table of Contents
- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Usage](#usage)
- [Security Considerations](#security-considerations)

## Prerequisites

Before using this application, ensure you have the following prerequisites in place:

1. **Nginx Server with RTMP Module**: You need an Nginx server installed and properly configured with the RTMP module.

2. **Bash Scripts**: Make sure that the provided Bash scripts (`disable_stream.sh`, `enable_stream.sh`, and `get_streams.sh`) exist and are executable. These scripts are used for controlling the RTMP streams.

3. **Web Server with PHP Support**: You need a web server with PHP support to host the web interface. Ensure that the web server has the necessary permissions to execute the Bash scripts.

## Installation

1. Clone this repository to your web server:

   ```bash
    https://github.com/sahilup/RTMP-Stream-Control-Panel.git

Ensure that the paths to the Bash scripts and Nginx configuration files are correctly specified in the PHP code.

## Usage

1. Start your web server and access the index.php page in your web browser.

2. The web interface will display a list of currently running RTMP streams.

3. To enable or disable a stream, select the stream from the dropdown menu and click either the "Enable Stream" or "Disable Stream" button.

4. The PHP code will execute the appropriate Bash script, which interacts with the Nginx server to enable or disable the selected stream.

## Security Considerations

1. Security: Be cautious when executing external commands from PHP, as it can pose security risks. Implement proper input validation and access control to prevent unauthorized access.

2. Authentication: This code does not include user authentication. Consider adding authentication mechanisms to restrict access to authorized users only.

3. Permissions: Ensure that your web server has the necessary permissions to execute the Bash scripts. Limit the scripts' permissions to prevent unauthorized modifications.

4. Nginx Configuration: Secure your Nginx configuration and follow best practices for RTMP stream control.
