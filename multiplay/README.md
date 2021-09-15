Endpoint for Multiplay Websocket. [Link to code](https://github.com/MOROway/moroway-app-server).

## Apache sample rewrite

```

RewriteEngine On
RewriteCond %{HTTP:Connection} Upgrade [NC]
RewriteCond %{HTTP:Upgrade} websocket [NC]
RewriteRule ^/path/to/server/multiplay(/)?$ ws://127.0.0.1:8080/MOROwayAppTeamplay/moroway-app-java/ [P,L]


```
