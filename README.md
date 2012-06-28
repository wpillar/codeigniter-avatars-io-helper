Codeigniter Avatars.io Helper
=============================

A Codeigniter helper for the http://avatars.io service.

### Installation

Drop the avatars-io_helper.php file into application/helpers and load or autoload in the usual manner.

### Basic Usage

Echo a plain URL of the avatar.

```php
avatar_url('twitter', 'willpillar');
avatar_url('facebook', 'willpillar');
avatar_url('gravatar', 'me@willpillar.com');
```

### Different Sizes

```php
avatar_url('twitter', 'willpillar', 'large');
avatar_url('facebook', 'willpillar', 'medium');
```

### Return the URL rather than echo

```php
$url = avatar_url('twitter', 'willpillar', 'small', false);
```

### Echo an img tag

```php
avatar_url('twitter', 'willpillar', 'medium', true, true);
```

Find out more: http://avatars.io