const Inert = require('inert');
const Hapi = require('hapi');
const server = new Hapi.Server();

server.register(Inert, () => {});
server.connection({ port: 3000 });

server.ext('onPreResponse', (request, reply) => {
    if (request.response.isBoom) {
        return reply.redirect('/');
    }
    return reply.continue();
});

server.route({
  method: 'GET',
  path: '/',
  handler: (request, reply) => {
    reply.file('../public/index.html', { confine: false });
  }
});

server.route({
  method: 'GET',
  path: '/{file*}',
  handler: (request, reply) => {
    const parameters = request.params.file.split('/');
    let path = '../public/';
    parameters.forEach((value) => {
      path += '/'+encodeURIComponent(value);
    });
    reply.file(path, { confine: false });
  }
});

server.start((err) => {
  if (err) {
    throw err;
  }
  console.log('Server running at port 3000');
});
