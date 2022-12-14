# numpy  array 

import numpy as np

arr = np.array([1, 2, 3, 4, 5])

print(arr)

print(type(arr))
# --------------------------------------------

# import numpy as np

# arr = np.array((1, 2, 3, 4, 5))

# print(arr)

# # ----------------------------------------
# import numpy as np

# arr = np.array(42)

# print(arr)
# # ----------------------------------
# import numpy as np

# arr = np.array([1, 2, 3, 4, 5])

# print(arr)

# # --------------------------------------
# import numpy as np

# arr = np.array([[1, 2, 3], [4, 5, 6]])

# print(arr)

# # -------------------------------------

# import numpy as np

# arr = np.array([[[1, 2, 3], [4, 5, 6]], [[1, 2, 3], [4, 5, 6]]])

# print(arr)

# # ---------------------------------------------
# import numpy as np

# a = np.array(56)
# b = np.array([4, 5, 6, 7, 8])
# c = np.array([[4, 5, 6], [1, 2, 3]])
# d = np.array([[[1, 2, 3], [4, 5, 6]], [[1, 2, 3], [4, 5, 6]]])

# print(a.ndim)
# print(b.ndim)
# print(c.ndim)
# # --------------------------------------------------
# import numpy as np

# arr = np.array([1, 2, 3, 4], ndmin=5)

# print(arr)
# print('number of dimensions :', arr.ndim)

# # ----------------------------------------------
# # Array Indexing
# import numpy as np

# arr = np.array([1, 2, 3, 4])

# print(arr[0])

# # -------------------------------------
# import numpy as np

# arr = np.array([1, 2, 3, 4])

# print(arr[1])
# # --------------------------------------
# import numpy as np

# arr = np.array([1, 2, 3, 4])

# print(arr[2] + arr[3])

# print(d.ndim)

# # ----------------------------------------
# # ----------------------------------

# # Array iterating

# import numpy as np

# arr = np.array([1, 2, 3])

# for x in arr:
#   print(x)

# # ---------------------------------------
# import numpy as np

# arr = np.array([[1, 2, 3], [4, 5, 6]])

# for x in arr:
#   print(x)

# # -------------------------------------
# import numpy as np

# arr = np.array([[1, 2, 3], [4, 5, 6]])

# for x in arr:
#   for y in x:
#     print(y)
# # ----------------------------------------
# import numpy as np

# arr = np.array([[[1, 2, 3], [4, 5, 6]], [[7, 8, 9], [10, 11, 12]]])

# for x in arr:
#   print(x)

# # --------------------------------------
# import numpy as np

# arr = np.array([[1, 2, 3, 4], [5, 6, 7, 8]])

# for x in np.nditer(arr[:, ::2]):
#   print(x)

# # -------------------------------------
# import numpy as np

# arr = np.array([1, 2, 3])

# for idx, x in np.ndenumerate(arr):
#   print(idx, x)

# # ------------------------------

# import numpy as np

# arr = np.array([[1, 2, 3, 4], [5, 6, 7, 8]])

# for idx, x in np.ndenumerate(arr):
#   print(idx, x)


# # ------------------------------------
