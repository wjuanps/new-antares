/* eslint-disable no-unused-vars */
"use strict";

const uri = {
  getParameter(q) {
    let urlString = location.href;
    let url = new URL(urlString);

    return url.searchParams.get(q);
  },
};
