# block_custom_announcement

## Features

- Displays a configurable announcement block on student dashboards and the site homepage.
- **Two levels of configuration:**
  1. **Site-wide settings** (set by admin under Site administration -> Plugins -> Blocks -> Custom Announcement):
     - Announcement Title
     - Announcement Text
     - Background Color (HEX)
  2. **Per-block overrides** (optional, set by a user when adding the block):
     - Custom Title
     - Custom Text
     - Custom Background Color
- If per-block settings are not provided, the block displays the site-wide defaults.
- Supports multiple instances; each block can have different overrides if desired.
- Compatible with Moodle **4.4**.

## Installation

1. Copy the `block_custom_announcement` folder into your Moodle `/blocks/` directory or Go to **Site administration -> Plugins -> Install plugins -> Upload the folder zip file**.
2. Log in as admin and go to **Site administration → Notifications** to complete installation.
3. Add the **Custom Announcement** block to the dashboard or front page.
4. Configure the site-wide defaults in **Site administration → Plugins → Blocks → Custom Announcement**.
5. (Optional) Override settings for any instance when adding/editing the block.

## Assumptions

- Valid HEX codes are used for background colors (e.g., `#ffcc00`).
- Default site-wide settings are displayed if per-block overrides are not configured.

## Development Notes

- Time taken: ~4 hours (including support for both site-wide and per-instance configuration).
- Challenges: Merging site-wide defaults with per-block overrides while ensuring Moodle 4.4 compatibility.
