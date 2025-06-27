[![add-on registry](https://img.shields.io/badge/DDEV-Add--on_Registry-blue)](https://addons.ddev.com)
[![tests](https://github.com/weitzman/ddev-mtk/actions/workflows/tests.yml/badge.svg?branch=main)](https://github.com/weitzman/ddev-mtk/actions/workflows/tests.yml?query=branch%3Amain)
[![last commit](https://img.shields.io/github/last-commit/weitzman/ddev-mtk)](https://github.com/weitzman/ddev-mtk/commits)
[![release](https://img.shields.io/github/v/release/weitzman/ddev-mtk)](https://github.com/weitzman/ddev-mtk/releases/latest)

# DDEV Mtk

## Overview

This add-on integrates Mtk into your [DDEV](https://ddev.com/) project.

## Installation

```bash
ddev add-on get weitzman/ddev-mtk
ddev restart
```

After installation, make sure to commit the `.ddev` directory to version control.

## Usage

| Command | Description |
| ------- | ----------- |
| `ddev describe` | View service status and used ports for Mtk |
| `ddev logs -s mtk` | Check Mtk logs |

## Advanced Customization

To change the Docker image:

```bash
ddev dotenv set .ddev/.env.mtk --mtk-docker-image="busybox:stable"
ddev add-on get weitzman/ddev-mtk
ddev restart
```

Make sure to commit the `.ddev/.env.mtk` file to version control.

All customization options (use with caution):

| Variable | Flag | Default |
| -------- | ---- | ------- |
| `MTK_DOCKER_IMAGE` | `--mtk-docker-image` | `busybox:stable` |

## Credits

**Contributed and maintained by [@weitzman](https://github.com/weitzman)**
