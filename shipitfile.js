module.exports = function (shipit) {
  require('shipit-deploy')(shipit);

  shipit.initConfig({
    default: {
      workspace: '/tmp/noctown',
      deployTo: '/tmp/deploy_to',
      repositoryUrl: 'https://github.com/brokenhd/noctown.git',
      ignores: ['.git', 'node_modules'],
      keepReleases: 2,
      deleteOnRollback: false,
      key: '/path/to/key',
      shallowClone: true
    },
    production: {
      servers: '192.186.224.193'
    }
  });
};
