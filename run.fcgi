#!/home/e/ey/eye/.virtualenvs/flask/bin/python
from flup.server.fcgi import WSGIServer
from flaskapp import app
from datetime import datetime

if __name__ == '__main__':
    WSGIServer(app).run()
