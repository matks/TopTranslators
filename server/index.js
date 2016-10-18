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
    reply.file('../front/index.html', { confine: false });
  }
});

server.route({
  method: 'GET',
  path: '/data',
  handler: (request, reply) => {
    reply.file('../data/statistics.json', { confine: false });
  }
});

server.route({
  method: 'GET',
  path: '/public/{file}',
  handler: (request, reply) => {
    const file = encodeURIComponent(request.params.file);
    reply.file(`../front/public/${file}`, { confine: false });
  }
});

server.route({
  method: 'GET',
  path: '/img/{file*}',
  handler: (request, reply) => {
    const parameters = request.params.file.split('/');
    let path = '../front/img';
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
