const { assertSupportedNodeVersion } = require('../src/Engine');

module.exports = async () => {
    // @ts-ignore
    process.noDeprecation = true;

    assertSupportedNodeVersion();

    const mix = require('{../src/Mix}').primary;

    require(mix.paths.mix());

    await mix.installDependencies();
    await mix.init();
    mix.browserSync('127.0.0.1:8000');

    return mix.build();
};
