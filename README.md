# PeaceKeeper

PeaceKeeper is an advanced Discord moderation bot designed to enhance the quality and safety of interactions by providing precise, customizable channel-specific muting capabilities.

## Mission Statement

To empower Discord communities with advanced moderation tools, enhancing the quality and safety of interactions by providing precise, customizable channel-specific muting capabilities.

## Vision Statement

We envision PeaceKeeper as the cornerstone of community moderation on Discord, creating environments where discussions thrive in respect, understanding, and freedom, made possible by our innovative, user-oriented solutions.

## Values Statement

- **Innovation:** Embracing cutting-edge technology to address and anticipate the dynamic needs of Discord communities.
- **Transparency:** Ensuring all moderation actions are visible, trackable, and accountable to support trust and fairness.
- **Empowerment:** Providing moderators and community leaders the tools they need to foster safe, engaging, and inclusive spaces.
- **Collaboration:** Encouraging feedback and ideas from users and communities to continually refine and enhance our solutions.

## Goals Statement

1. **Launch the initial version of PeaceKeeper within 6 months,** focusing on scalability, reliability, and user-friendliness.
2. **Achieve adoption by over 100 Discord servers in the first year,** demonstrating the value and effectiveness of our moderation solutions.
3. **Continuously innovate based on community feedback,** implementing new features and improvements quarterly to meet the evolving needs of Discord users.
4. **Cultivate a supportive user community around PeaceKeeper,** offering a platform for sharing best practices, feedback, and support.

## Features

- Channel-specific mutes
- Voice channel bans
- Detailed moderation logs
- Customizable muting capabilities
- User and admin tracking
- Scalable and reliable infrastructure

## Getting Started

Requires PHP 8.2+, MariaDB/MySQL, RabbitMQ.   Designed for use on Linux (Tested on CentOS)

To get started with PeaceKeeper, follow these steps:

1. **Installation:**
    ```bash
    # Clone the repository
    git clone https://github.com/discommand2/peacekeeper.git
    # Navigate into the directory
    cd peacekeeper
    # Install dependencies
    composer install
    # Optional: Symlink systemd service files
    cd /etc/systemd/system/
    ln -s <peacekeeper_dir>/systemd/* .
    systemctl daemon-reload

    ```
2. **Configuration:**
    - Update the `config/*.json` files with your Discord bot token and database credentials.
    - Update the `systemd/*` files as necessary to support your installation
3. **Running the Bot:**
    ```bash
    # Start the bot
    systemctl start peacekeeper
    ```

## Contribution

We welcome contributions from the community. To contribute:

1. Fork the repository
2. Create a new branch (`git checkout -b feature-branch`)
3. Commit your changes (`git commit -am 'Add some feature'`)
4. Push to the branch (`git push origin feature-branch`)
5. Create a new Pull Request

## License

PeaceKeeper is licensed under the MIT License. See `LICENSE` for more information.

## Contact

For questions, feedback, or suggestions, please contact us on discord at [https://discord.gg/AMFFUWsVuq](https://discord.gg/AMFFUWsVuq)