module.exports = {
  env: {
    browser: true,
    es2021: true,
    node: true,
  },
  extends: [
    'eslint:recommended',
    // Add 'plugin:import/errors' if you're using the import plugin  
    'plugin:import/errors',  
    'plugin:import/warnings',  
    'plugin:import/typescript'  
  ],
  parserOptions: {
    ecmaVersion: 12,
    // sourceType: 'script',
    sourceType: 'module',  // Allow using import/export statements  
  },
  rules: {
    "no-console": "off", // Allow console.log for debugging
    "prefer-arrow-callback": "error", // Enforce arrow functions for callbacks
    "func-names": "off", // Disable requiring function names
    'strict': 'off', // Disable the strict rule  
    // "strict": ["error", "global"], // Enforce strict mode globally
  },
  globals: {
    document: 'readonly',
    console: 'readonly'
  }
};